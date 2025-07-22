<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pending extends Model
{
     protected $fillable = [
        'first_name',
        'last_name',
        'middle_name',
        'address',
        'course',
        'student_id',
        'contact',
        'emergency_contact_name',
        'emergency_contact_number',
        'birth_date',
        'signature',
        'esc',
        'image',
        'qr_code' ,
    ];
}
