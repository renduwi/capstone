<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        $title = 'Veem : Vehicle Emergency';
        //return view('pages.index', compact('title'));
        return view('pages.index')->with('title', $title);
    }

    public function about(){
        $title = 'About Veem : Vehicle Emergency';
        return view('pages.about')->with('title', $title);
    }

    public function login(){
        $title = 'Login Page';
        return view('pages.login')->with('title', $title);
    }

    public function register(){
        $title = 'Register';
        return view('pages.register')->with('title', $title);
    }
}
