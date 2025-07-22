<?php

namespace App\Http\Controllers;
use App\Models\Complete;
use Illuminate\Http\Request;

class SettingController extends Controller
{
     public function updateSchoolYear(Request $request)
        {
            $request->validate([
                'school_year' => 'required|string'
            ]);
            Complete::query()->update(['school_year' => $request->school_year]);
            return response()->json([
                'message' => 'Updated Successfully',
                'school_year' => $request->school_year
            ]);
        }
      public function getSchoolYear()
        {
            $schoolYear = Complete::select('school_year')
                ->groupBy('school_year')
                ->orderByRaw('COUNT(*) DESC')
                ->limit(1)
                ->value('school_year');
            return response()->json([
                'school_year' => $schoolYear
            ]);
        }
}
