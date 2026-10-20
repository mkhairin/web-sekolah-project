<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasOne;

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

    public function user(): HasOne
    {
        return $this->hasOne(User::class);
    }
}
