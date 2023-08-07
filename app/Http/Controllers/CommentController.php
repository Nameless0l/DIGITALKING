<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function add(Request $request,$id_post){
        $validate=$request->validate([
            'content'=>['required','string'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:'.User::class],
            'name'=>['string']
        ]);
        $id_user=1;
        // dd($request->input('email'));
        $comment=Comment::create([
            'content'=>$request->input('content'),
            'posts_id'=>$id_post,
            'user_id'=>$id_user
        ]);
    }
}
