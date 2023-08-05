<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index(){
        return view('layouts.blog');
    }
    
    public function blogDetails(){
        return view('layouts.blog_detail');
    }
}
