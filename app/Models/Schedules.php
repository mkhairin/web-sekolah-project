<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Schedules extends Model
{
    use HasFactory;

    protected $table = 'schedules';
    protected $fillable = [
        'academic_year_id',
        'class_id',
        'teacher_id',
        'day_of_week',
        'start_time',
        'end_time'
    ];


}
