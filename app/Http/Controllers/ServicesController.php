<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServicesController extends Controller
{
    public function index(){
        return view('layouts.Services.index');
    }
    public function serigraphie()
    {
        return view('layouts.Services.serigraphie');
    }
}
