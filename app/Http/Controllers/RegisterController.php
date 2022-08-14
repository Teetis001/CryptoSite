<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function register(){
        return view('users.register');
    }

    public function process(Request $request){
        $request->validate([
            'name' => 'required',
            'email' => 'email|unique:users,email',
            'password' => 'required'
        ]);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'is_admin' => false
        ]);

        return redirect()->route('home');
    }
}
