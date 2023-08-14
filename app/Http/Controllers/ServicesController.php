<?php

namespace App\Http\Controllers;

use App\Models\images;
use Illuminate\Http\Request;

class ServicesController extends Controller
{
    public function index(){
        return view('layouts.Services.index');
    }
    public function service($service)
    {
        $images=images::orderBy('create-at','desc')->where('service',$service)->get();
        return view('layouts.Services.service',compact(['images','service']));
    }
}
