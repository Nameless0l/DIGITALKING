<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Comment;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index(){
        $posts=Post::orderBy('created_at','desc')->paginate(8);
        $comments=Comment::all();
        return view('layouts.blog',compact(['posts','comments']));
    }

    public function blogDetails($id){
        $posts=Post::limit(5)->get();
        $post=Post::findorFail($id);
        $comments=Comment::where('posts_id',$id)->get();
        return view('layouts.blog_detail',compact(['posts','comments','id','post']));
    }
    public function createPost()
    {
        return view('admin.creation_post');
    }
    public function listePosts()
    {
        $post =Post::findorFail(12);
        return view('admin.liste_posts',compact(['post']));
    }
    public function __create(Request $request)
    {
        // dd($request);
        $post=new Post();
        $post->users_id='2';
        $post->content = $request->input('content'); // Assurez-vous d'avoir le champ 'content' dans votre formulaire
        $post->save();

        return redirect()->route('listePoste');
    }
}
