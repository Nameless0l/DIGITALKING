<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function store()
    {
        $users=User::orderBy('created_at','desc')->get();
        return view('admin.liste_users_',compact(['users']));
    }
}
