<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Posts extends Model
{
    use HasFactory;

    protected $table = 'posts';
    protected $fillable = [
        'user_id',
        'category_id',
        'title',
        'slug',
        'content',
        'image-path',
        'status',
        'published_at'
    ];

    // relasi yang mengarah ke tabel user
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    // relasi yang mengarah ke tabel category
    public function category(): BelongsTo
    {
        return $this->belongsTo(Categories::class);
    }
}
