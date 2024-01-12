<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class History extends Model
{
    use HasFactory;

    protected $fillable = ['student_id', 'attribute', 'old_value', 'new_value', 'changed_at'];

    public function student()
    {
        return $this->belongsTo(Students::class, 'student_id');
    }
}
