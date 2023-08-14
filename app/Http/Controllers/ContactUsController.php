<?php

namespace App\Http\Controllers;

use App\Models\Message;
use Illuminate\Http\Request;

class ContactUsController extends Controller
{
    public function contact(){
        return view('layouts.contact_us');
    }
    public function send(Request $request){
        $request->validate([
            'email'=>['email','required','string'],
            'phone'=>['required'],
            'message'=>['string'],
            'name'=>['string']
        ]);
        $data=[
            'email'=>$request->email,
            'name'=>$request->name,
            'phone'=>$request->phone,
            'content'=>$request->message,
            'objet'=>'Prise de contact'
        ];

        $message =new Message();
        $message->to = 'Admin';
        $message->from = $data['name'];
        $message->email_from =$data['email'];
        $message->number_from =$data['phone'];
        $message->statut =0;
        $message->object =$data['objet'];
        $message->content =$data['content'];
        $message->cause ='contact';
        $message->save();

        $mail = new MailController();
        $mail->contact($data);
    }
}
