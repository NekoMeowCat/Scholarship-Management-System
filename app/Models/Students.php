<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\LogOptions;
use Spatie\Activitylog\Traits\LogsActivity;
use Spatie\Activitylog\Facades\Activity;



class Students extends Model
{
    use HasFactory, LogsActivity;

    protected $fillable = [
        'name', 'middle_name', 'last_name', 'year_level', 'student_image', 'semester', 'school_year', 'status', 'id_number', 'gender', 'course', 'email',
        'department_id', 'scholarship_id', 'school_year'
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
        'name',
        'middle_name',
        'last_name',
        'year_level',
        'student_image',
        'semester',
        'school_year',
        'id_number',
        'status',
        'gender',
        'course',
        'email',
        'department_id',
        'scholarship_id',
    ];

    public function department()
    {
        return $this->belongsTo(Departments::class);
    }

    public function scholarship()
    {
        return $this->belongsTo(Scholarships::class);
    }

    public function scholarDetails()
    {
        return $this->hasOne(ScholarDetails::class, 'student_id', 'id');
    }

    
    public function attachments()
    {
        return $this->hasMany(Attachments::class, 'student_id');
    }

    public function scopeBySchoolYearAndSemester($query, $schoolYear, $semester)
    {
        return $query->where('school_year', $schoolYear)->where('semester', $semester);
    }


    public function getActivitylogOptions(): LogOptions
    {
        return LogOptions::defaults()
            ->logOnly(self::$logAttributes);
    }

}
