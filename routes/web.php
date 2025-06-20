<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
})->name('home');

Route::get('/forum', function () {
    return view('forum');
})->name('forum');

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