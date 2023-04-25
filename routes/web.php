<?php

use App\Http\Controllers\MessagesController;
use App\Http\Controllers\PostsController;
use App\Models\Messages;
use App\Models\Posts;
use App\Models\Projects;
use Illuminate\Support\Facades\Route;

Route::get(
    '/',
    fn () => view('welcome',[
        'projects'=>Projects::latest()->get()
        ]
    )
);

Route::get(
    '/blog', 
    fn () => view('blog',[
        'posts'=>Posts::latest()->paginate(5)
        ]
    )
);

Route::get('/blog/{post:id}', [PostsController::class,'show']);
Route::get('/contact', fn () => view('contact'));
Route::post('/contact/message', [MessagesController::class,'store']);

Route::get('/uses', fn () => view('uses'));

