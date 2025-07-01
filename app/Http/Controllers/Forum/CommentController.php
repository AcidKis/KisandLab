<?php

namespace App\Http\Controllers\Forum;

use App\Models\Comment;
use App\Http\Controllers\Controller;
use App\Models\Posts;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CommentController extends Controller
{
    public function index(Request $request, $postId) // Изменено
    {
        if (!Auth::check()) {
            return redirect()->route('login')->with('error', 'Пожалуйста, войдите, чтобы оставить комментарий.');
        }

        $request->validate([
            'content' => 'required|string|max:1000',
            'parent_id' => 'nullable|exists:comments,id'
        ]);

        $post = Posts::findOrFail($postId); // Явно находим пост

        $comment = new Comment([
            'content' => $request->content,
            'user_id' => Auth::id(),
            'post_id' => $post->id, // Используем явный ID поста
            'parent_id' => $request->parent_id
        ]);

        $comment->save();
        $post->increment('comments_count');

        return back()->with('success', 'Комментарий добавлен!');
    }
}
