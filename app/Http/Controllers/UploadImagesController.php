<?php

namespace App\Http\Controllers;

use App\Models\images;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Storage;

class UploadImagesController extends Controller
{
    public function form ()
    {
        return view('test');
    }

    public function delete(Request $request)
    {
        $images =$request->option;

        foreach($images as $image)
        {
            Storage::disk('public')->delete($image);
            $image = images::where('file_path',$image);
            $image->delete();
        }
        return redirect()->back();
    }
    public function save(Request $request,$menu){
        // dd($request->file);
        // for ($i=0; $i < count($request->file); $i++) {
        //     $name =time().'_'.$request->file[$i]->hashName();
        //     $file_path=$request->file[$i]->storeAs($menu,$name,'public');
        //     $images=new images();
        //     $images->service =$menu;
        //     $images->file_path='/storage/'.$file_path ;
        //     $images->save();
        // }
        for ($i=0; $i < count($request->file); $i++) {
            $image = $request->file[$i];
            $resizedImage = Image::make($image)->resize(278, 236);
            $imageName = time() . '_' . uniqid() . '.' . $image->hashName();
            Storage::disk('public')->put($menu.'/' . $imageName, $resizedImage->stream());
            $images=new images();
            $images->service =$menu;
            $images->file_path=$menu.'/' . $imageName;
            $images->save();
        }
        // foreach ($request->file as $request){

        // }
        return back()->with('success','fichier enregistrer avec success ')
                     ->with('file',$imageName);
    }
}
