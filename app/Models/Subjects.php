<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Subjects extends Model
{
    use HasFactory;

    protected $table = 'subjects';
    protected $fillable = ['code', 'name', 'category', 'is_active'];
}
