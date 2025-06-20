<?php

namespace App\Http\Controllers;
use App\Models\Complete;
use Illuminate\Http\Request;

class CompletedController extends Controller
{

    public function index(){
       $students = Complete::all()->map(function ($student) {
        $student->full_name = trim("{$student->first_name} {$student->middle_name} {$student->last_name}");
        return $student;
    });

    return response()->json($students);
    }


  public function store(Request $request)
{
    try {
        // Check kung JSON o FormData
        $isJson = $request->isJson();

        // Validation rules
        $rules = [
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'middle_name' => 'nullable|string|max:255',
            'address' => 'required|string|max:255',
            'course' => 'required|string|max:255',
            'student_id' => 'required|string|max:255',
            'contact' => 'required|string|max:20',
            'emergency_contact' => 'required|array',
            'emergency_contact.name' => 'required|string|max:255',
            'emergency_contact.number' => 'required|string|max:15',
            'birth_date' => 'required|date',
            'signature' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'qr_code' => 'nullable|string|max:255',
            'photo_position' => 'nullable|string',
            'signature_position' => 'nullable|string',
        ];

        // Pag JSON, i-convert ang emergency_contact to array kung string
        if ($isJson && is_string($request->emergency_contact)) {
            $request->merge(['emergency_contact' => json_decode($request->emergency_contact, true)]);
        }

        $validated = $request->validate($rules);

        $existing = Complete::where('student_id', $request->student_id)->first();

        // Prepare data for update/create
        $data = [
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'middle_name' => $request->middle_name,
            'address' => $request->address,
            'course' => $request->course,
            'student_id' => $request->student_id,
            'contact' => $request->contact,
            'emergency_contact' => $request->emergency_contact,
            'birth_date' => $request->birth_date,
            'qr_code' => $request->qr_code,
            'photo_position' => $request->photo_position,
            'signature_position' => $request->signature_position,
        ];

        // Handle file uploads only if present (FormData)
            if ($request->hasFile('signature')) {
                $data['signature'] = $request->file('signature')->store('signatures', 'public');
            }
            if ($request->hasFile('image')) {
                $data['image'] = $request->file('image')->store('images', 'public');
            }

        if ($existing) {
            $existing->update($data);
            return response()->json([
                'message' => 'Student updated successfully',
                'student' => $existing->fresh()
            ], 200);
        } else {
            $student = Complete::create($data);
            return response()->json([
                'message' => 'Student created successfully',
                'student' => $student
            ], 201);
        }
    } catch (\Illuminate\Validation\ValidationException $e) {
        return response()->json([
            'message' => 'Validation failed',
            'errors' => $e->errors()
        ], 422);
    } catch (\Exception $e) {
        return response()->json([
            'message' => 'Server error',
            'error' => $e->getMessage()
        ], 500);
    }
}


            public function show($student_id)
            {
                $student = Complete::where('student_id', $student_id)->first();
                if (!$student) {
                    return response()->json(['message' => 'Not found'], 404);
                }
                return response()->json($student);
            }

// // Example update logic
// $student = Complete::where('student_id', $request->student_id)->first();
// if ($student) {
//     $student->update([
//         // ...existing fields...
//         'photo_position' => $request->photo_position,
//         'signature_position' => $request->signature_position,
//     ]);
// } else {
//     // create logic...
// }

}
