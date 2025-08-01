<?php

namespace App\Http\Controllers;
use App\Models\EmployeePending;
use Illuminate\Http\Request;

class EmployeePendingController extends Controller
{
    public function store(Request $request)
    {
        try {
            $validated = $request->validate([
                'first_name' => 'required|string|max:255',
                'middle_name' => 'nullable|string|max:255',
                'last_name' => 'required|string|max:255',
                'address' => 'nullable|string|max:500',
                'contact' => 'nullable|string|max:255',
                'emergency_contact.name' => 'nullable|string|max:255',
                'emergency_contact.number' => 'nullable|string|max:255',
                'position' => 'required|string|max:50',
                'employee_id' => 'required|string|max:20',
                'tin_no' =>  'required|string|max:20',
                'sss_no' => 'required|string|max:20',
                'philhealth_no' => 'required|string|max:20',
                'hdmf_no' => 'required|string|max:20',
                'birth_date' => 'nullable|date',
                'signature' => 'nullable',
                'image' => 'nullable',
                'qr' => 'nullable|string|max:500',
            ]);

            $employee = EmployeePending::create([
                'first_name' => $validated['first_name'],
                'middle_name' => $validated['middle_name'] ?? null,
                'last_name' => $validated['last_name'],
                'address' => $validated['address'] ?? null,
                'contact' => $validated['contact'] ?? null,
                'emergency_contact_name' => $validated['emergency_contact']['name'] ?? null,
                'emergency_contact_number' => $validated['emergency_contact']['number'] ?? null,
                'position' => $validated['position'] ?? null,
                'employee_id' => $validated['employee_id'] ?? null,
                'tin_no' => $validated['tin_no'] ?? null,
                'sss_no' => $validated['sss_no'] ?? null,
                'philhealth_no' => $validated['philhealth_no'] ?? null,
                'hdmf_no' => $validated['hdmf_no'] ?? null,
                'birth_date' => $validated['birth_date'] ?? null,
                'signature' => $validated['signature'] ?? null,
                'image' => $validated['image'] ?? null,
                'qr' => $validated['qr'] ?? null,
            ]);
            return response()->json($employee, 201);
        } catch (\Exception $e) {
            \Log::error('Employee store error: ' . $e->getMessage());
            return response()->json([
                'message' => 'Server Error',
                'error' => $e->getMessage(),
            ], 500);
        }
    }
    public function employeeshowpending($employee_id) 
    {
      $employee = EmployeePending::where('employee_id', $employee_id)->first();
        if (!$employee) {
            return response()->json(['message' => 'Employee not found'], 404);
        }
      return response()->json([
        'id' => $employee->id,
        'first_name' => $employee->first_name,
        'middle_name' => $employee->middle_name,
        'last_name' => $employee->last_name,
        'address' => $employee->address,
        'contact' => $employee->contact,
        'emergency_contact_name' => $employee->emergency_contact_name,
        'emergency_contact_number' => $employee->emergency_contact_number,
        'position' => $employee->position,
        'employee_id' => $employee->employee_id,               
        'tin_no' => $employee->tin_no,
        'sss_no' => $employee->sss_no,
        'philhealth_no' => $employee->philhealth_no,
        'hdmf_no' => $employee->hdmf_no,               
        'birth_date' => $employee->birth_date,
        'signature' => $employee->signature,
        'image' => $employee->image,
        'qr' => $employee->qr,
        ]);
    }

}


