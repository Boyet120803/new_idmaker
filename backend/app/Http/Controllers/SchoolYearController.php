<?php

namespace App\Http\Controllers;
use App\Models\StudentSchoolYear;
use Illuminate\Http\Request;

class SchoolYearController extends Controller
{
     public function index($student_id)
     {
         $data = StudentSchoolYear::where('student_id', $student_id)
             ->orderByDesc('school_year')
             ->get(['school_year']);
         return response()->json($data);
     }
     public function store(Request $request)
     {
         $validated = $request->validate([
             'student_id' => 'required|exists:pendings,id',
             'school_year' => 'required|regex:/^\d{4}-\d{4}$/',
         ]);
         $exists = StudentSchoolYear::where('student_id', $validated['student_id'])
             ->where('school_year', $validated['school_year'])
             ->exists();
 
         if ($exists) {
             return response()->json(['message' => 'Already exists.'], 409);
         }
         $record = StudentSchoolYear::create($validated);
         return response()->json($record, 201);
     }
}
