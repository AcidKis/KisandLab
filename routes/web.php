<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Forum\PostList;

Route::get('/', function () {
    return view('index');
})->name('home');

Route::get('/forum', [PostList::class, 'index'])->name('forum');

Route::get('/topic', function () {
    return view('topic');
})->name('topic');

Route::get('/profile', function () {
    return view('profile');
})->name('profile');

Route::get('/register', function () {
    return view('auth.register');
})->name('register');

Route::get('/login', function () {
    return view('auth.login');
})->name('login');

require __DIR__.'/auth.php';