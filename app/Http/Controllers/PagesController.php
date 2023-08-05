<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function objectifs()
    {
        return view('layouts.objectifs');
    }
    public function team()
    {
        return view('layouts.team');
    }
    public function testimonials()
    {
        return view('layouts.testimonials');
    }
}
