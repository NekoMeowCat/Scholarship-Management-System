<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Scholarships extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'amount',
    ];

    public function students()
    {
        return $this->hasMany(Students::class);
    }
}
