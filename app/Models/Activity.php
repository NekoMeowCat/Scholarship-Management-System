<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\Models\Activity as SpatieActivity;

class Activity extends SpatieActivity
{
    use HasFactory;

    protected $fillable = [
        'causer_id', 'causer_type', 'description', 'subject_id', 'subject_type',
        'properties', 'created_at', 'updated_at',
    ];
}
