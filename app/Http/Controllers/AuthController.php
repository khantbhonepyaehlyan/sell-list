<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    //login
    public function login(){
        return view('loginPage');
    }
    // register
    public function register(){
        return view('registerPage');
    }

    // direct
    public function dashboard(){
        if (Auth::user()->role == 'admin'){
            return redirect()->route('admin#home');
        }
        return redirect()->route('sell#home');
    }

}
