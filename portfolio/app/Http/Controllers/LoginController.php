<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function login()
    {
        return view("usertype.login");
    }

    public function register()
    {
        return view("usertype.register");
    }
}
