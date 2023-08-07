<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Comment;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index(){
        $posts=Post::paginate(8);
        $comments=Comment::all();
        return view('layouts.blog',compact(['posts','comments']));
    }

    public function blogDetails($id){
        $posts=Post::limit(5)->get();
        $post=Post::findorFail($id);
        $comments=Comment::where('posts_id',$id)->get();
        return view('layouts.blog_detail',compact(['posts','comments','id','post']));
    }
}
