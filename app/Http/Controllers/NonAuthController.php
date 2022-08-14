<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NonAuthController extends Controller
{
    public function index(){
        return view ('users.index');
    }

    public function about(){
        return view('users.about');
    }
    public function services(){
        return view('users.services');
    }
    public function trading(){
        return view('users.trading');
    }
    public function pricing(){
        return view('users.pricing');
    }
    public function faq(){
        return view('users.faq');
    }
    public function contact(){
        return view('users.contact');
    }
}
