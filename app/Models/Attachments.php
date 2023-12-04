<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Attachments extends Model
{
    use HasFactory;

    protected $fillable = [
        'student_id',
        'transcript_of_records',
        'certificate_of_enrollment',
        'grade_slip',
        'income_tax_return',
        'certificate_of_indegency',
        'statement_of_accounts',
        'birth_certificate',
        'good_moral',
        'valid_id',
        'application_form',
        'essay',
        'endorsement',
    ];

    public function student()
    {
        return $this->belongsTo(Students::class);
    }
}
