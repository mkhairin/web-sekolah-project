<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class academicYears extends Model
{
    use HasFactory;

    protected $table = 'academic_years';
    protected $fillable = [
        'name',
        'is_active',
        'start_date',
        'end_date'
    ];
}
