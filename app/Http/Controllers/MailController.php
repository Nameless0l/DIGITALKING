<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\MailNotify;
use Exception;
use Illuminate\Support\Facades\Mail;
class MailController extends Controller
{
    public function mailnotify(){
        $data=['name'=>'Mbassi Ewolo loic Aron'];
        try {
            Mail::to('wwwmbassiloic@gmail.com')->send(new MailNotify($data));
            return response()->json(['Bien verifier votre boite mail']);
        } catch (Exception $th) {
            return $th;
        }
    }
}
