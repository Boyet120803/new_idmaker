<?php

namespace App\Http\Controllers;
use App\Models\EmployeeComplete;
use Illuminate\Http\Request;

class EmployeeCompleteController extends Controller
{
  public function index()
  {
    try {
       $employees = EmployeeComplete::all()->map(function ($employee) 
       {
         $employee->full_name = trim("{$employee->first_name} {$employee->middle_name} {$employee->last_name}");
         return $employee;
       });
       return response()->json($employees);
       } catch (\Exception $e) {
          return response()->json([
                'error' => $e->getMessage(),
                'line' => $e->getLine(),
                'file' => $e->getFile()
        ],500);
      }
  }
  public function store(Request $request)
  {
    try {
        $validated = $request->validate([
            'first_name' => 'required|string|max:255',
            'middle_name' => 'nullable|string|max:255',
            'last_name' => 'required|string|max:255',
            'address' => 'nullable|string|max:500',
            'contact' => 'nullable|string|max:255',
            'emergency_contact_name' => 'nullable|string|max:255',
            'emergency_contact_number' => 'nullable|string|max:255',
            'position' => 'required|string|max:50',
            'employee_id' => 'required|string|max:20',
            'tin_no' => 'required|string|max:20',
            'sss_no' => 'required|string|max:20',
            'philhealth_no' => 'required|string|max:20',
            'hdmf_no' => 'required|string|max:20',
            'birth_date' => 'nullable|date',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:51200',
            'signature' => 'nullable|file|mimes:jpeg,png,jpg,gif,svg|max:10240',
            'qr' => 'nullable|string|max:5000000',
            'photo_position' => 'nullable|string|max:255',
            'signature_position' => 'nullable|string|max:255',
            'firstname_fontsize' => 'nullable|string|max:20',
            'lastname_fontsize' => 'nullable|string|max:20',
            'status' => 'nullable|in:first_print,re_print',
            'reason' => 'nullable|string|max:500',
        ]);
        $imagePath = null;
        if ($request->hasFile('image')) {
            try {
                $imagePath = $request->file('image')->store('images', 'public');
            } catch (\Exception $e) {
                \Log::error('Image upload failed: ' . $e->getMessage());
                return response()->json([
                    'message' => 'Image upload failed',
                    'error' => $e->getMessage()
                ], 500);
            }
        }
        $signaturePath = null;
        if ($request->hasFile('signature')) {
            try {
                $signaturePath = $request->file('signature')->store('signatures', 'public');
            } catch (\Exception $e) {
                \Log::error('Signature upload failed: ' . $e->getMessage());
                return response()->json([
                    'message' => 'Signature upload failed',
                    'error' => $e->getMessage()
                ], 500);
            }
        }
        $employee = EmployeeComplete::create([
            'first_name' => $validated['first_name'],
            'middle_name' => $validated['middle_name'] ?? null,
            'last_name' => $validated['last_name'],
            'address' => $validated['address'] ?? null,
            'contact' => $validated['contact'] ?? null,
            'emergency_contact_name' => $validated['emergency_contact_name'] ?? null,
            'emergency_contact_number' => $validated['emergency_contact_number'] ?? null,
            'position' => $validated['position'],
            'employee_id' => $validated['employee_id'],
            'tin_no' => $validated['tin_no'],
            'sss_no' => $validated['sss_no'],
            'philhealth_no' => $validated['philhealth_no'],
            'hdmf_no' => $validated['hdmf_no'],
            'birth_date' => $validated['birth_date'] ?? null,
            'signature' => $signaturePath,
            'image' => $imagePath,
            'qr' => $validated['qr'] ?? null,
            'photo_position' => $validated['photo_position'] ?? null,
            'signature_position' => $validated['signature_position'] ?? null,
            'firstname_fontsize' => $validated['firstname_fontsize'] ?? null,
            'lastname_fontsize' => $validated['lastname_fontsize'] ?? null,
            'status' => $validated['status'] ?? 'first_print',
            'reason' => $validated['reason'] ?? null,
        ]);
        return response()->json($employee, 201);
        } catch (\Illuminate\Validation\ValidationException $e) {
            return response()->json([
                'message' => 'Validation failed',
                'errors' => $e->errors()
            ], 422);
        } catch (\Exception $e) {
            \Log::error('Employee store error: ' . $e->getMessage());
            return response()->json([
                'message' => 'Server Error',
                'error' => $e->getMessage(),
                'trace' => $e->getTraceAsString(),
            ], 500);
        }
  }
  public function showemployeecompleteid($id)
  {
    $complete = EmployeeComplete::find($id);
    if (!$complete) 
    {
     return response()->json(['message' => 'Record not found'], 404);
    }
    return response()->json([
        'id' => $complete->id,
        'first_name' => $complete->first_name,
        'middle_name' => $complete->middle_name,
        'last_name' => $complete->last_name,
        'address' => $complete->address,
        'contact' => $complete->contact,
        'emergency_contact_name' => $complete->emergency_contact_name,
        'emergency_contact_number' => $complete->emergency_contact_number,
        'position' => $complete->position,
        'employee_id' => $complete->employee_id,
        'tin_no' => $complete->tin_no,
        'sss_no' => $complete->sss_no,
        'philhealth_no' => $complete->philhealth_no,
        'hdmf_no' => $complete->hdmf_no,
        'birth_date' => $complete->birth_date,
        'signature' => $complete->signature,
        'image' => $complete->image,
        'qr' => $complete->qr,
        'photo_position' => $complete->photo_position,
        'signature_position' => $complete->signature_position,
        'firstname_fontsize' => $complete->firstname_fontsize,
        'lastname_fontsize' => $complete->lastname_fontsize,
        'status' => $complete->status,
        'reason' => $complete->reason,
      ]);
  }
  public function employeeupdate(Request $request, $id)
  {
    try {
     $rules = [
        'first_name' => 'required|string|max:255',
        'middle_name' => 'nullable|string|max:255',
        'last_name' => 'required|string|max:255',
        'address' => 'nullable|string|max:500',
        'contact' => 'nullable|string|max:255',
        'emergency_contact_name' => 'nullable|string|max:255',
        'emergency_contact_number' => 'nullable|string|max:255',
        'position' => 'required|string|max:50',
        'employee_id' => 'required|string|max:20',
        'tin_no' =>  'required|string|max:20',
        'sss_no' => 'required|string|max:20',
        'philhealth_no' => 'required|string|max:20',
        'hdmf_no' => 'required|string|max:20',
        'birth_date' => 'nullable|date',
        'signature' => 'nullable|file',
        'image' => 'nullable|file',
        'qr' => 'nullable|string|max:500',
        'photo_position' => 'nullable|string|max:255',
        'signature_position' => 'nullable|string|max:255',
        'firstname_fontsize' => 'nullable|string|max:20',
        'lastname_fontsize' => 'nullable|string|max:20',
        'status' => 'nullable|in:first_print,re_print',
        'reason' => 'nullable|string|max:500',
       ];
        $validated = $request->validate($rules);
        $student = EmployeeComplete::find($id);
        if (!$student) {
          return response()->json([
             'message' => 'Student not found'
          ], 404);
        }
        $data = $request->only([
        'first_name', 'middle_name', 'last_name', 'address', 'contact',
        'emergency_contact_name', 'emergency_contact_number','position',
        'employee_id', 'tin_no', 'sss_no', 'philhealth_no', 'hdmf_no',
        'birth_date', 'qr', 'photo_position', 'signature_position',
        'firstname_fontsize', 'lastname_fontsize', 'status', 'reason'
        ]);
        if ($request->hasFile('signature')) {
            $data['signature'] = $request->file('signature')->store('signatures', 'public');
        }
        if ($request->hasFile('image')) {
           $data['image'] = $request->file('image')->store('images', 'public');
        }
        if ($request->status === 're_print') {
            $student->print_count = ($student->print_count ?? 0) + 1;
            if ($request->filled('reason')) {
            $student->reason = $request->reason;
            }
        }
        $student->update($data);
          return response()->json([
             'message' => 'Employee updated successfully',
             'print_count' => $student->print_count,
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
  public function totalemployees()
  {
    $total = EmployeeComplete::count(); 
    $goal = 500;
    $progress = min(100, ($total / $goal) * 100); 
      return response()->json(
        [
         'total' => $total,
         'goal' => $goal,
         'progress' => round($progress, 1)
        ]);
  }
  public function getEmployeeActive()
  {
    return response()->json(EmployeeComplete::active()->get());
  }
  public function getEmployeeArchived()
  {
    return response()->json(EmployeeComplete::archived()->get());
  }
  public function employeearchive($id)
  {
    $student = EmployeeComplete::findOrFail($id);
    $student->is_archived = true;
    $student->save();
    return response()->json(['success' => true, 'message' => 'Student archived successfully.']);
  }
  public function employeeunarchive($id)
  {
    $student = EmployeeComplete::findOrFail($id);
    $student->is_archived = false;
    $student->save();
    return response()->json(['success' => true, 'message' => 'Student unarchived successfully.']);
  }
}
