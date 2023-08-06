<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function objectifs()
    {
        return view('layouts.objectifs');
    }
    public function team(Blog $post)
    {
        return view('layouts.team');
    }
    public function testimonials()
    {
        return view('layouts.testimonials');
    }
    public function test(){
        return view('temoignage.show');
    }
}
