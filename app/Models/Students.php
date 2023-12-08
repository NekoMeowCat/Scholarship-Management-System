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
        'name', 'middle_name', 'last_name', 'year_level', 'id_number', 'gender', 'course', 'email',
        'department_id', 'scholarship_id',
    ];

    protected static $logAttributes = [
        'name', 'middle_name', 'last_name', 'year_level', 'id_number', 'gender', 'course', 'email',
        'department_id', 'scholarship_id',
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
        return $this->hasMany(Attachments::class);
    }


    public function getActivitylogOptions(): LogOptions
    {
        return LogOptions::defaults()
            ->logOnly(['name', 'middle_name', 'last_name', 'year_level', 'id_number', 'gender', 'course', 'email', 'department_id', 'scholarship_id']);
    }
}
