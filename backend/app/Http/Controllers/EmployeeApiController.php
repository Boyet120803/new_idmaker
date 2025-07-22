<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Cache;

class EmployeeApiController extends Controller
{
     public function fetchEmployees(Request $request)
    {
        if (!$request->user()) {
            return response()->json(['message' => 'Unauthorized'], 401);
        }
        $cacheKey = 'mlgcl_employees';
        if (Cache::has($cacheKey)) {
            return response()->json(Cache::get($cacheKey));
        }
        $allEmployees = [];
        $currentPage = 1;
        $lastPage = 1;
        do {
            $response = Http::timeout(10)->withHeaders([
                'x-api-key' => config('services.mlgcl_api.key'),
                'Origin' => 'https://idmaker.test',
                'Content-Type' => 'application/json'
            ])->get("https://api-portal.mlgcl.edu.ph/api/external/employee-list?page={$currentPage}");
            if ($response->failed()) {
                return response()->json([
                    'message' => 'Failed to fetch data',
                    'error' => $response->body()
                ], 500);
            }
            $result = $response->json();
            $data = $result['data'] ?? [];
            $lastPage = $result['meta']['last_page'] ?? 1;
            $allEmployees = array_merge($allEmployees, $data);
            $currentPage++;
        } while ($currentPage <= $lastPage);
        Cache::put($cacheKey, $allEmployees, now()->addHour());
        return response()->json($allEmployees);
    }
}   