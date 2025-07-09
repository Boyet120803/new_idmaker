<?php

namespace App\Http\Controllers;
use App\Models\Pending;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class PendingController extends Controller
{
      public function store(Request $request)
        {
            try {
                $request->validate([
                    'first_name' => 'required|string|max:255',
                    'last_name' => 'required|string|max:255',
                    'middle_name' => 'nullable|string|max:255',
                    'address' => 'required|string|max:255',
                    'course' => 'required|string|max:255',
                    'student_id' => 'required|string|max:255',
                    'contact' => 'required|string|max:20',
                    'emergency_contact_name' => 'required|string|max:255',
                    'emergency_contact_number' => 'required|string|max:15',
                    'birth_date' => 'required|date',
                    'signature' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
                    'esc' => 'nullable|string|max:255',
                    'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
                    'qr_code' => 'nullable|string|max:255',
                ]);
                    $existing = Pending::where('student_id', $request->student_id)->first();
                    if ($existing) {
                        return response()->json([
                            'message' => 'Student already exists.',
                            'student' => $existing
                        ], 409);
                    }
$signaturePath = null;

if ($request->hasFile('signature')) {
    Log::info('✅ Signature file received', [
        'mime' => $request->file('signature')->getClientMimeType(),
        'original' => $request->file('signature')->getClientOriginalName()
    ]);
    // Gamitin yung public disk para ma-access via URL
    $signaturePath = $request->file('signature')->store('signatures', 'public');
} else {
    Log::warning('❌ Signature file NOT received');
}



                $student = Pending::create([
                    'first_name' => $request->first_name,
                    'last_name' => $request->last_name,
                    'middle_name' => $request->middle_name,
                    'address' => $request->address,
                    'course' => $request->course,
                    'student_id' => $request->student_id,
                    'contact' => $request->contact,
                    'emergency_contact_name' => $request->emergency_contact_name,
                    'emergency_contact_number' => $request->emergency_contact_number,
                    'birth_date' => $request->birth_date,
                    'signature' => $signaturePath,
                    'esc' => $request->esc,
                    'image' => $request->file('image') ? $request->file('image')->store('images') : null,
                    'qr_code' => $request->qr_code,
                ]);

                return response()->json([
                    'message' => 'Student created successfully',
                    'student' => $student
                  ], 201);
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
          public function showid($student_id)
            {
                $pending = Pending::where('student_id', $student_id)->first();

                if (!$pending) {
                    return response()->json(['message' => 'Record not found'], 404);
                }

                return response()->json([
                    'id' => $pending->id,
                    'first_name' => $pending->first_name,
                    'middle_name' => $pending->middle_name,
                    'last_name' => $pending->last_name,
                    'address' => $pending->address,
                    'course' => $pending->course,
                    'student_id' => $pending->student_id,
                    'contact' => $pending->contact,
                    'emergency_contact_name' => $pending->emergency_contact_name,
                    'emergency_contact_number' => $pending->emergency_contact_number,
                    'birth_date' => $pending->birth_date,
                    'esc' => $pending->esc,
                    'qr_code' => $pending->qr_code,
                    'signature' => $pending->signature,
                ]);
            }
            public function saveIdLayout(Request $request)
            {
                $request->validate([
                    'student_id' => 'required|string',
                    'image' => 'required|array',
                    'signature' => 'required|array',
                ]);

                $pending = Pending::where('student_id', $request->student_id)->first();
                if (!$pending) {
                    return response()->json(['message' => 'Record not found'], 404);
                }
                $pending->photo_layout = json_encode($request->image);
                $pending->signature_layout = json_encode($request->signature);
                $pending->save();
                return response()->json(['message' => 'ID layout saved successfully']);
            }

               public function getSignature($student_id)
                {
                    $pending = Pending::where('student_id', $student_id)->first();

                    if (!$pending || !$pending->signature) {
                        return response()->json(['message' => 'Signature not found'], 404);
                    }

                    // Gamitin yung public path
                    $filePath = storage_path('app/public/' . $pending->signature);

                    if (!file_exists($filePath)) {
                        return response()->json(['message' => 'Signature file not found'], 404);
                    }

                    return response()->file($filePath);
                }


        }




