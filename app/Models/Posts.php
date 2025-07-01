<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\mor;

class Posts extends Model
{
    use HasFactory;
    protected $table = 'posts';
    protected $primaryKey = 'id';

    protected $fillable = [
        'name',
        'short_description',
        'rating',
        'views',
        'content',
        'user_id',
        'comments_count'
    ];
    /**
     * Получение пользователя, создавшего пост
     */

    public function user(): BelongsTo
    {
        return $this->belongsTo(
            User::class,   // Модель
            'user_id',   // Внешний ключ в текущей таблице (posts)
            'id'      // Первичный ключ в связанной таблице (users)
        );
    }
    // Комментарии к посту
    public function comments(): HasMany
    {
        return $this->hasMany(Comment::class, 'post_id')->whereNull('parent_id');
    }

    // Все комментарии (включая ответы)
    public function allComments(): HasMany
    {
        return $this->hasMany(Comment::class, 'post_id');
    }

    // Лайки для поста
    public function likes(): MorphMany
    {
        return $this->morphMany(Like::class, 'likeable');
    }
}
