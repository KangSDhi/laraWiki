<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login(Request $request){
        if ($_SERVER["REQUEST_METHOD"] == "POST"){

        }else{
            return view("login");
        }
    }

    public function register(Request $request){
        if ($_SERVER["REQUEST_METHOD"] == "POST"){

        }else{
            return view("register");
        }
    }
}
