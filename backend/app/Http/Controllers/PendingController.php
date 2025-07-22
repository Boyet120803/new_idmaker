<?php

namespace App\Http\Controllers;
use App\Models\Pending;
use App\Models\Complete;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;

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
                'signature' => 'nullable|string',
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
            if ($request->filled('signature')) {
                $signatureData = $request->input('signature');       
                if (preg_match('/^data:image\/(\w+);base64,/', $signatureData, $type)) {
                    $extension = strtolower($type[1]);
                    $signatureData = substr($signatureData, strpos($signatureData, ',') + 1);
                    $signatureData = base64_decode($signatureData);         
                    if ($signatureData === false) {
                        throw new \Exception('Base64 decode failed.');
                    }           
                    $fileName = uniqid('sig_') . '.' . $extension;
                    Storage::disk('public')->put('signatures/' . $fileName, $signatureData);
                    $signaturePath = 'signatures/' . $fileName;
                } else {
                    throw new \Exception('Invalid base64 signature format.');
                }
            }
            $imagePath = null;
            if ($request->hasFile('image')) {
                $imagePath = $request->file('image')->store('images', 'public');
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
                'image' => $imagePath,
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
            'signature' => $pending->signature ? url('storage/' . ltrim($pending->signature, '/')) : null,
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
    public function showschoolyear($student_id)
    {
      $latest = Complete::where('student_id', $student_id)
            ->orderByDesc('school_year')
            ->first();
      if (!$latest) {
        return response()->json(['message' => 'Not found'], 404);
       }
       return response()->json([
        'school_year' => $latest->school_year
       ]);
    }
}




