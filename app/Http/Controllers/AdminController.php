<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:admin');

    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       
        if(auth()->user()->type == 'Admin')
        {
         //$user = User::find($user_id);
         return view('admin');
        }
 
        elseif (auth()->user()->type == 'Repair Shop')
        {
            return view('Admin_repairshop.index');
        }
    }
}
