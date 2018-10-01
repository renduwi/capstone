<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\ServiceReq;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    { 
       if(auth()->user()->type == 'User')
       {
        //$user = User::find($user_id);
        return view('home');
       }

       elseif (auth()->user()->type == 'Mechanic')
       {
        //$notif = ServiceReq::where('Mid', auth()->user()->id)->get();
           //return view('mechanic.index', compact('notif'));
           return view('mechanic.index');

       }
       elseif (auth()->user()->type == 'Admin')
       {
           return view('admin');
       }  
       elseif (auth()->user()->type == 'Repair Shop')
       {
           return view('Admin_repairshop.index');
       }  
    }

    public function show()
    {
        
        return view('mechanic.show');
    }
}
