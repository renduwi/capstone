<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
class RepairShopLoginController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest:repairshop');
    }
    public function showLoginForm()
    {
    return view('auth.repairshoplogin');
    }

    public function login(Request $request)
    {
        //Validate the form data
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required'
        ]);

        //Attempt to log the admin in
        if(Auth::guard('repairshop')->attempt(['email' => $request->email, 'password'=> $request->password], $request->remember))
        {
            //if s, redirect
            return redirect()->intended(route('repairshop.dashboard'));
        }

        return redirect()->back()->withInput($request->only('email', 'remember'));
        //if unsuccesful, redirect to login w/ data
    }
}
