<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login(Request $request){
        return view ('login');
    }

    public function register(){
        return view('register');
    }

    public function authenticating(Request $request)
    {
        dd('ini halaman auth');
    }
}
