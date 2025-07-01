<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\MorphMany;

class Comment extends Model
{
    protected $fillable = ['content', 'user_id', 'post_id', 'parent_id'];

    // Автор комментария
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    // Пост, к которому относится комментарий
    public function post(): BelongsTo
    {
        return $this->belongsTo(Posts::class);
    }

    // Родительский комментарий (если это ответ)
    public function parent(): BelongsTo
    {
        return $this->belongsTo(Comment::class, 'parent_id');
    }

    // Ответы на этот комментарий
    public function replies(): HasMany
    {
        return $this->hasMany(Comment::class, 'parent_id');
    }

    // Лайки для комментария
    public function likes(): MorphMany
    {
        return $this->morphMany(Like::class, 'likeable');
    }
}