<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\LogOptions;
use Spatie\Activitylog\Traits\LogsActivity;
use Spatie\Activitylog\Facades\Activity;

class Attachments extends Model
{
    use HasFactory, LogsActivity;

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

    protected $casts = [
        'transcript_of_records' => 'boolean',
        'certificate_of_enrollment' => 'boolean',
        'grade_slip' => 'boolean',
        'income_tax_return' => 'boolean',
        'certificate_of_indegency' => 'boolean',
        'statement_of_accounts' => 'boolean',
        'birth_certificate' => 'boolean',
        'good_moral' => 'boolean',
        'valid_id' => 'boolean',
        'application_form' => 'boolean',
        'essay' => 'boolean',
        'endorsement' => 'boolean',
    ];

    protected static $logAttributes = [
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
        return $this->belongsTo(Students::class, 'student_id');
    }

    public function getActivitylogOptions(): LogOptions
    {
        return LogOptions::defaults()
            ->logOnly(self::$logAttributes);
    }

}
