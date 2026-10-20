<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ClassStudent extends Model
{
    use HasFactory;

    protected $table = 'class_students';
    protected $fillable = [
        'student_id',
        'class_id',
        'academic_year_id',
        'status'
    ];

    
}
