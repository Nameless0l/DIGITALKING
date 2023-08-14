<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\MailNotify;
use Exception;
use Illuminate\Support\Facades\Mail;
class MailController extends Controller
{
    public function mailnotify(){
        $data =[
            'name'=>'MBASSI EWOLO',
            'email'=>'user@gmail.com',
            'service'=>'Infographie',
            'content'=>'lorejihbf sdk cdsuhf mj yifewhf  guibwjeytn wer gn384thn u5n4k, y7erihkb  ert yefgb unur',
            'objet'=>'Demande d\'un devis',
            ];
        try {

            Mail::to(env('MAIL_FROM_ADDRESS'))->send(new MailNotify($data));
            return response()->json(['Bien verifier votre boite mail']);
        } catch (Exception $th) {
            return $th;
        }
    }
    public function devis(Array $data)
    {
        try {
            Mail::to(env('MAIL_FROM_ADDRESS'))->send(new MailNotify($data));
            return response()->json(['Bien verifier votre boite mail']);
        } catch (Exception $th) {
            return $th;
        }
    }

    public function contact(Array $data)
    {
        try {
            // dd(env('MAIL_FROM_ADDRESS'));
            Mail::to(env('MAIL_FROM_ADDRESS'))->send(new MailNotify($data));
            return response()->json(['Bien verifier votre boite mail']);
        } catch (Exception $th) {
            return $th;
        }
    }


}
