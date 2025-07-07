<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Complete extends Model
{
    use HasFactory;
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
        'image',
        'qr_code' ,
        'photo_position',
        'signature_position',
        'firstname_fontsize',
        'lastname_fontsize',
        'esc',
    ];
}
