<?php

namespace App\Http\Controllers;

use App\Models\Posts;
use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function show(Posts $post)
    {
       return view('post',['post'=>$post]);
    }
}
