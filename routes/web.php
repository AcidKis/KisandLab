<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Forum\PostList;
use App\Http\Controllers\Forum\PostDetail;
use App\Http\Controllers\Forum\CommentController;
use App\Http\Controllers\Forum\LikeController;

Route::get('/', function () {
    return view('index');
})->name('home');

Route::prefix('forum')->group(function () {
    Route::get('/', [PostList::class, 'index'])->name('forum');
    Route::get('/{id}', [PostDetail::class, 'index'])->name('forumDetail');
    Route::post('/comment/{id}', [CommentController::class, 'index'])->name('comment');
});

Route::post('/likes/toggle', [LikeController::class, 'toggleLike'])
    ->name('likes.toggle');
    

Route::get('/profile', function () {
    return view('profile');
})->name('profile');

Route::get('/register', function () {
    return view('auth.register');
})->name('register');

Route::get('/login', function () {
    return view('auth.login');
})->name('login');

require __DIR__ . '/auth.php';
