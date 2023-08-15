<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\MailController;
use App\Models\Message;

class DevisController extends Controller
{
    public function index()
    {
        return view('layouts.devis');
    }
    public function liste()
    {
        $devis =Message::orderBy('created_at','desc')->where('cause','Devis');
        return view('admin.lite_devis',compact(['devis']));
    }
    public function askquote(Request $request){

        $request->validate([
                        'message'=>['string','required'],
                        'email'=>['required','email','string'],
                        'service'=>['string','required'],
                        'name'=>['string'],
        ]);
        $data =[
            'name'=>$request->name,
            'email'=>$request->email,
            'service'=>$request->service,
            'content'=>$request->message,
            'objet'=>'Demande d\'un devis',
        ];
        $mail =new MailController() ;
        $mail->devis($data);
    }

}
