<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmployeeComplete extends Model
{
     use HasFactory;
    protected $fillable = [
        'first_name',
        'middle_name',
        'last_name',
        'address',
        'contact',
        'emergency_contact_name',
        'emergency_contact_number',
        'position',
        'employee_id',
        'tin_no',
        'sss_no',
        'philhealth_no',
        'hdmf_no',
        'birth_date',
        'signature',
        'image',
        'qr',
        'photo_position',
        'signature_position',
        'firstname_fontsize',
        'lastname_fontsize',
        'status',
        'reason',
    ];
}

