<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Classes extends Model
{
    use HasFactory;

    protected $table = 'classes';
    protected $fillable = [
        'name',
        'grade_level',
        'teacher_id'
    ];

    public function teachers(): BelongsTo
    {
        return $this->belongsTo(Teachers::class);
    }
}
