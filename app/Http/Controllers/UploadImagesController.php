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

    public function save(Request $request,$menu){
        for ($i=0; $i < count($request->file); $i++) {
            $name =time().'_'.$request->file[$i]->hashName();
            $file_path=$request->file[$i]->storeAs($menu,$name,'public');
            $images=new images();
            $images->service =$menu;
            $images->file_path='/storage/'.$file_path ;
            $images->save();
        }
        return back()->with('success','fichier enregistrer avec success ')
                     ->with('file',$name);
    }
}
