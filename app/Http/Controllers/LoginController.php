<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function login(){
        return view('users.login');
    }

    public function process(Request $request){
        $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if(auth()->attempt($request->only('email','password'))){
            return redirect()->route('home');
        }else{
            return back()->with('err', 'Invalid Login Credentials');
        }
    }

}
