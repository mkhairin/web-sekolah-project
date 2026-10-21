<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Grades extends Model
{
    use HasFactory;

    protected $table = 'grades';
    protected $fillable = [
        'student_id',
        'subject_id',
        'class_id',
        'academic_year_id',
        'grade_type',
        'score',
        'notes'
    ];
}
