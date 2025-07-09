<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Setting;

class SettingsController extends Controller
{
    public function getSchoolYear()
    {
        $sy = DB::table('settings')->where('key', 'school_year_start')->first();
        return response()->json(['school_year_start' => $sy ? $sy->value : date('Y')]);
    }

    public function updateSchoolYear(Request $request)
    {
        $request->validate(['school_year_start' => 'required|integer|min:2000|max:2100']);
        DB::table('settings')->updateOrInsert(
            ['key' => 'school_year_start'],
            ['value' => $request->school_year_start]
        );
        return response()->json(['success' => true]);
    }
}
