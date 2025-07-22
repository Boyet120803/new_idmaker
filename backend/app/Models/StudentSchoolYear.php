<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudentSchoolYear extends Model
{
    use HasFactory;

    protected $fillable = ['student_id', 'school_year'];

    public function student()
    {
        return $this->belongsTo(Pending::class);
    }
}
