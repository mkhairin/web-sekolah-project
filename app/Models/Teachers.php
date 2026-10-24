<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Teachers extends Model
{
    use HasFactory;

    protected $table = 'teachers';
    protected $fillable = [
        'user_id',
        'nip',
        'gender',
        'place_of_birth',
        'date_of_birth',
        'phone_number',
        'address',
        'latest_education',
        'join_date'
    ];

    // Mengambil data pengguna yang terkait dengan data guru ini.
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    // Mengambil semua kelas yang diajar oleh guru ini melalui teacher_id.
    public function classes(): HasMany
    {
        return $this->hasMany(Classes::class, 'teacher_id');
    }
}
