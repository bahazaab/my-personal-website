<?php

namespace App\Http\Controllers;

use App\Models\Messages;
use Illuminate\Http\Request;

class MessagesController extends Controller
{
    public function store(Messages $message,Request $request)
    {
        $request->validate([
            'username'=>'required|max:255',
            'email'=>'required|email',
            'message'=>'required',
        ]);
        
        $message->create([
            'username'=>$request->input('username'),
            'email'=>$request->input('email'),
            'content'=>$request->input('message'),
        ]);

        return back();
        
    }
}
