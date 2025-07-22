<?php

namespace App\Http\Controllers;
use App\Models\Complete;
use Illuminate\Http\Request;

class CompletedController extends Controller
{

    public function index()
    {
       $students = Complete::all()->map(function ($student) {
        $student->full_name = trim("{$student->first_name} {$student->middle_name} {$student->last_name}");
        return $student;
       });
       return response()->json($students);
    }
    public function store(Request $request)
    {
        try {
            $validated = $request->validate([
                'first_name'                => 'required|string|max:255',
                'last_name'                 => 'required|string|max:255',
                'middle_name'               => 'nullable|string|max:255',
                'address'                   => 'required|string|max:255',
                'course'                    => 'required|string|max:255',
                'student_id'                => 'required|string|max:255',
                'contact'                   => 'required|string|max:20',
                'emergency_contact_name'    => 'required|string|max:255',
                'emergency_contact_number'  => 'required|string|max:15',
                'birth_date'                => 'required|date',
                'signature'                 => 'nullable',
                'image'                     => 'nullable|file|mimes:jpeg,png,jpg,gif,svg|max:10240',
                'qr_code'                   => 'nullable|string|max:255',
                'photo_position'            => 'nullable|string',
                'signature_position'        => 'nullable|string',
                'firstname_fontsize'        => 'nullable|string',
                'lastname_fontsize'         => 'nullable|string',
                'esc'                       => 'nullable|string|max:255',
                'status'                    => 'nullable|in:first_print,re_print',
                'reason'                    => 'nullable|string|max:500',
                'school_year'               => ['required', 'regex:/^\d{4}-\d{4}$/'],
            ]);
    
            $data = $request->only([
                'first_name', 'last_name', 'middle_name',
                'address', 'course', 'student_id', 'contact',
                'emergency_contact_name', 'emergency_contact_number',
                'birth_date','signature','qr_code',
                'photo_position', 'signature_position',
                'firstname_fontsize', 'lastname_fontsize',
                'esc', 'status', 'reason', 'school_year'
            ]);
            $data['middle_name'] = $request->filled('middle_name') &&
                strtolower($request->input('middle_name')) !== 'null'
                ? $request->input('middle_name')
                : null;
            if ($request->hasFile('signature')) {
                $file = $request->file('signature');
                $path = $file->store('signatures', 'public');
                $data['signature'] = $path;
            } elseif ($request->filled('signature')) {
                $sig = $request->input('signature');
                if (is_string($sig) && str_starts_with($sig, 'data:image')) {
                    if (preg_match('/^data:image\/(\w+);base64,/', $sig, $type)) {
                        $extension = strtolower($type[1]);
                        $sig = base64_decode(substr($sig, strpos($sig, ',') + 1));
                        if ($sig === false) throw new \Exception('Base64 decode failed');
                        $fileName = uniqid('sig_') . '.' . $extension;
                        Storage::disk('public')->put('signatures/' . $fileName, $sig);
                        $data['signature'] = 'signatures/' . $fileName;
                    }
                } elseif (str_starts_with($sig, 'signatures/')) {
                    $data['signature'] = $sig;
                }
            }
            if ($request->hasFile('image')) {
                $data['image'] = $request->file('image')->store('images', 'public');
            }
            $existing = Complete::where('student_id', $request->student_id)->first();
    
            if ($existing) {
                if (!isset($data['signature'])) $data['signature'] = $existing->signature;
                if (!isset($data['image'])) $data['image'] = $existing->image;
    
                $existing->update($data);
    
                return response()->json([
                    'message' => 'Student updated successfully',
                    'student' => $existing->fresh()
                ], 200);
            }
    
            $student = Complete::create($data);
    
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

    public function show($student_id)
    {
       $student = Complete::where('student_id', $student_id)->first();
         if (!$student) {
          return response()->json(['message' => 'Not found'], 404);
       }
        return response()->json($student);
    }

    public function showcompleteid($id)
    {
      $complete = Complete::find($id);
       if (!$complete){
            return response()->json(['message' => 'Record not found'], 404);
         }
            return response()->json([
                'id' => $complete->id,
                 'first_name' => $complete->first_name,
                'middle_name' => $complete->middle_name,
                'last_name' => $complete->last_name,
                'address' => $complete->address,
                'course' => $complete->course,
                'student_id' => $complete->student_id,
                'contact' => $complete->contact,
                'emergency_contact_name' => $complete->emergency_contact_name,
                'emergency_contact_number' => $complete->emergency_contact_number,
                'birth_date' => $complete->birth_date,
                'qr_code' => $complete->qr_code,
                'signature' => $complete->signature,
                'image' => $complete->image,
                'photo_position' => $complete->photo_position,
                'signature_position' => $complete->signature_position,
                'firstname_fontsize' => $complete->firstname_fontsize,
                'lastname_fontsize' => $complete->lastname_fontsize,
                'esc' => $complete->esc,
                'school_year' => $complete->school_year, 
         ]); 
    }

    public function update(Request $request, $id)
    {
      try {
            $rules = [
                 'first_name' => 'required|string|max:255',
                 'last_name' => 'required|string|max:255',
                 'middle_name' => 'nullable|string|max:255',
                 'address' => 'required|string|max:255',
                 'course' => 'required|string|max:255',
                 'contact' => 'required|string|max:20',
                 'emergency_contact_name' => 'nullable|string|max:255',
                 'emergency_contact_number' => 'nullable|string|max:15',
                 'birth_date' => 'required|date',
                 'signature' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
                 'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
                 'qr_code' => 'nullable|string|max:255',
                 'photo_position' => 'nullable|string',
                 'signature_position' => 'nullable|string',
                 'school_year' => 'nullable|string|max:20',
                ];
                $validated = $request->validate($rules);
                $student = Complete::find($id);
                if (!$student) {
                    return response()->json([
                        'message' => 'Student not found'
                    ], 404);
                }
                $data = $request->only([
                    'first_name', 'last_name', 'middle_name', 'address', 'course',
                    'contact', 'emergency_contact_name', 'emergency_contact_number',
                    'birth_date', 'qr_code', 'photo_position', 'signature_position','school_year'
                ]);
                if ($request->hasFile('signature')) {
                    $data['signature'] = $request->file('signature')->store('signatures', 'public');
                }
                if ($request->hasFile('image')) {
                    $data['image'] = $request->file('image')->store('images', 'public');
                }
                $student->update($data);
                return response()->json([
                    'message' => 'Student updated successfully',
                    'student' => $student->fresh()
                ], 200);

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

    public function completeid($id)
    {
      $complete = Complete::find($id); 
        if (!$complete) {
            return response()->json(['message' => 'Record not found'], 404);
         }
         return response()->json($complete);
    }
    public function totalstudents()
    {
        $total = Complete::count(); 
        $goal = 500;
        $progress = min(100, ($total / $goal) * 100); 
        return response()->json([
                'total' => $total,
                'goal' => $goal,
                'progress' => round($progress, 1)
        ]);
    }
    public function getActive()
    {
        return response()->json(Complete::active()->get());
    }
    public function getArchived()
    {
      return response()->json(Complete::archived()->get());
    }
    public function archive($id)
    {
      $student = Complete::findOrFail($id);
      $student->is_archived = true;
      $student->save();
         return response()->json(['success' => true, 'message' => 'Student archived successfully.']);
    }
    public function unarchive($id)
    {
        $student = Complete::findOrFail($id);
        $student->is_archived = false;
        $student->save();
        return response()->json(['success' => true, 'message' => 'Student unarchived successfully.']);
     }
}
