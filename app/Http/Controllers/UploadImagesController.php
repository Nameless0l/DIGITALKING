<?php

namespace App\Http\Controllers;

use App\Models\images;
use Illuminate\Http\Request;

class UploadImagesController extends Controller
{
    public function form ()
    {
        return view('test');
    }

    public function save(Request $request){
        $images=new images();
        foreach ($request->file as $request){
            $name =time().'_'.$request->getClientOriginalName();
            $file_path=$request->storeAs('uploads',$name,'public');
            $images->file_path='/storage/'.$file_path ;
            $images->save();
    }
        return back()->with('success','fichier enregistrer avec success ')
                     ->with('file',$name);
    }
}
