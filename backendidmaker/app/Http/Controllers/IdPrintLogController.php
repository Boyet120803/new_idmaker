<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\IdPrintLog;
use Illuminate\Support\Facades\Auth;

class IdPrintLogController extends Controller
{
    public function index(Request $request)
    {
        // Optional: filter by student_id
        $logs = IdPrintLog::with(['student'])
            ->when($request->student_id, fn($q) => $q->where('student_id', $request->student_id))
            ->orderBy('created_at', 'desc')
            ->get();
        return response()->json($logs);
    }

    public function store(Request $request)
    {
        $request->validate([
            'student_id' => 'required|string|max:20',
            'reason' => 'nullable|string|max:255',
            'remarks' => 'nullable|string|max:1000',
        ]);

        $log = IdPrintLog::create([
            'student_id' => $request->student_id,
            'reason' => $request->reason,
            'remarks' => $request->remarks,
        ]);

        return response()->json(['success' => true, 'log' => $log]);
    }
}
