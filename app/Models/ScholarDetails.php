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
        'contact_person',
        'contact_person_number',
    ];

    public function student()
    {
        return $this->belongsTo(Students::class);
    }
}
