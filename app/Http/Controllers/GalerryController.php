<?php

namespace App\Http\Controllers;

use App\Models\images;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class GalerryController extends Controller
{
    public function index($menu){
        $gallery= images::OrderBy('created-at','desc')->where('service',$menu)->get();
        return view('admin.components.galerie',compact('menu','gallery'));
    }
}
