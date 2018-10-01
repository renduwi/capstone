<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class RepairShopController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:repairshop');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$Rpid = auth()->repairshop()->Rpid;
        //$user = User::find($user_id);
        return view('repairshop');
    }
}
