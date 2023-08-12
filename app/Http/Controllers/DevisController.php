<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DevisController extends Controller
{
    public function index()
    {
        return view('layouts.devis');
    }
    public function liste()
    {
        return view('admin.lite_devis');
    }

}
