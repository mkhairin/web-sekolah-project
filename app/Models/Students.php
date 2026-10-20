<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Students extends Model
{
    use HasFactory;

    protected $table = 'students';
    protected $fillable = [
        'user_id',
        'nisn',
        'nis',
        'gender',
        'place_of_birth',
        'date_of_birth',
        'religion',
        'address',
        'phone_number',
        'parent_name',
        'parent_phone_number',
        'entry_year'
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(user::class);
    }
}
