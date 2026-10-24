<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

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

    public function students(): BelongsTo
    {
        return $this->belongsTo(Students::class);
    }

    public function classes(): BelongsTo
    {
        return $this->belongsTo(Classes::class);
    }

    public function academicYear(): BelongsTo
    {
        return $this->belongsTo(academicYears::class);
    }
}
