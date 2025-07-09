<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class IdPrintLog extends Model
{
    protected $fillable = [
        'student_id', 'reason', 'remarks'
    ];

    public function student() {
        return $this->belongsTo(Student::class);
    }

}
