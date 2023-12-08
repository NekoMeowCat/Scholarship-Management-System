<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ScholarDetails extends Model
{
    use HasFactory;

    protected $fillable = [
        'student_id',
        'date_of_birth',
        'phone_number',
        'address',
        'graduated_at',
        'contact_person',
        'contact_person_number',
        'graduated_at',
    ];

    public function student()
    {
        return $this->belongsTo(Students::class, 'student_id', 'id');
    }
}
