<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphTo;

class Like extends Model
{
    protected $fillable = ['user_id'];

    // Получение родительской модели (пост или комментарий)
    public function likeable(): MorphTo
    {
        return $this->morphTo();
    }
}