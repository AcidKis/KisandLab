<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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
}