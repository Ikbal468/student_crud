<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    // Add this property
    protected $fillable = [
        'student_code',
        'name',
        'course',
        'remarks',
    ];
}
