<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class SearchController extends Controller
{
     public function base(Request $request)
     {
        $request->validate(['element'=>['required','string']]);
        $query=$request->input('element');
     }
     public function blog(Request $request)
     {
        $request->validate(['query'=>['required','string']]);
        $query=$request->input('query');
        $result=Post::where('service',"like" , "%".$query."%")
                    ->get();
        return $result ;
    }
}
