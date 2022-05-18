<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function __index(){
        return view('login');
    }

    public function __login(Request $request){
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);


        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            session()->put('user_name', Auth()->user()->email);
            return redirect()->route('dashboard');
        }
  
        return redirect("login")->withSuccess('Login details are not valid');
    }
}
