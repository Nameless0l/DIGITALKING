<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Storage;

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
        $posts=Post::orderBy('created_at','desc')->paginate(8);
        return view('admin.liste_posts',compact(['posts']));
    }
    public function __create(Request $request)
    {
        $post=new Post();
        $image=$request->file('file');
        $menu=$request->service;
        $resizedImage = Image::make($image)->resize(500, 350);
        $imageName = time() . '_' . uniqid() . '.' . $image->hashName();
        $file_path ='posts/'.$menu.'/' . $imageName ;
        Storage::disk('public')->put($file_path, $resizedImage->stream());
        // dd($file_path);
        // $file_path=$request->file->storeAs('/posts/'.$menu,time().$name,'public');
        $post->img_path=$file_path;
        $post->users_id='2';
        $post->service =  $menu ;
        $post->content = $request->input('content');
        $post->save();
        // sans redimentioner

        // $post=new Post();
        // $name=$request->file('file')->hashName();
        // $menu=$request->service;
        // $file_path=$request->file->storeAs('/posts/'.$menu,time().$name,'public');
        // $post->img_path='/storage/'.$file_path;
        // $post->users_id='2';
        // $post->service =  $menu ;
        // $post->content = $request->input('content');
        // $post->save();

        return redirect()->route('listePoste');
    }
}
