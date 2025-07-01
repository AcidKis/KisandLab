<?php

namespace App\Http\Controllers\Forum;

use App\Http\Controllers\Controller;
use App\Models\Posts;
use Illuminate\Http\Request;

class PostDetail extends Controller
{
    public function index($id)
    {
        $post = Posts::with('user')->findOrFail($id);
        $post->increment('views');
        
        return view('forum-detail', compact('post'));
    }
}