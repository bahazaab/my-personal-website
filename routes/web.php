<?php

use Illuminate\Support\Facades\Route;

Route::get('/', fn () => view('welcome'));
Route::get('/blog', fn () => view('blog'));
Route::get('/post', fn () => view('post'));
Route::get('/contact', fn () => view('contact'));
Route::get('/uses', fn () => view('uses'));

