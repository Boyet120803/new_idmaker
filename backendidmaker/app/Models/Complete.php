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
        'status',
        'reason',
        'is_archived',
    ];
       protected $casts = [
        'is_archived' => 'boolean',
    ];
      public function scopeActive($query)
    {
        return $query->where('is_archived', false);
    }

    public function scopeArchived($query)
    {
        return $query->where('is_archived', true);
    }
}
