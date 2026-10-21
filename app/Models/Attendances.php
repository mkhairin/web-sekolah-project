<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
class Attendances extends Model
{
    use HasFactory;

    protected $table = 'attendances';
    protected $fillable = [
        'schedule_id', 'student_id', 'date', 'status', 'notes'
    ];
    
}
