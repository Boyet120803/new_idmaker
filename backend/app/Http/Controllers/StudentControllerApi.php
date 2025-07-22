<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Log;
class StudentControllerApi extends Controller
{
public function fetch(Request $request)
    {
    $validated = $request->validate([
            'school_year' => 'required|regex:/^\d{4}-\d{4}$/',
            'level'       => 'required|string|in:college,jhs,shs',
        ]);

        $schoolYear = $validated['school_year'];
        $levelInput = $validated['level'];

        $levelMap = [
            'college' => [1, 2, 3, 4],
            'jhs'     => [7, 8, 9, 10],
            'shs'     => [11, 12],
        ];

        $levels = $levelMap[$levelInput] ?? [];
        $apiKey = config('services.mlgcl_api.key');
        $baseUrl = 'https://api-portal.mlgcl.edu.ph/api/external/student-list';

        $allStudents = [];

        foreach ($levels as $lvl) {
            $cacheKey = "mlgcl:{$schoolYear}|{$lvl}|all";
            if (Cache::has($cacheKey)) {
                $students = Cache::get($cacheKey);
                $allStudents = array_merge($allStudents, $students);
                continue;
            }

            $students = [];
            $page = 1;

            do {
                $response = Http::timeout(10)->withHeaders([
                    'x-api-key' => $apiKey,
                    'Origin'    => 'https://idmaker.test',
                ])->get($baseUrl, [
                    'school_year' => $schoolYear,
                    'level'       => $lvl,
                    'page'        => $page,
                ]);

                if ($response->failed()) {
                    Log::error("MLGCL API failed on level {$lvl}, page {$page}", [
                        'status' => $response->status(),
                        'body'   => $response->body(),
                    ]);
                    break;
                }

                $json = $response->json();
                $students = array_merge($students, $json['data'] ?? []);
                $lastPage = $json['meta']['last_page'] ?? 1;
                $page++;

            } while ($page <= $lastPage);

            Cache::put($cacheKey, $students, now()->addHour());
            $allStudents = array_merge($allStudents, $students);
        }

        return response()->json($allStudents);
    }
}
