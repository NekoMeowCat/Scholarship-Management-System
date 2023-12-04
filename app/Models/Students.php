<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Students extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'middle_name',
        'last_name',
        'id_number',
        'year_level',
        'gender',
        'course',
        'email',
        'status',
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
        return $this->hasOne(ScholarDetails::class);
    }

    public function attachments()
    {
        return $this->hasMany(Attachments::class);
    }
}
