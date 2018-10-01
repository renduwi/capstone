<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
//use Illuminate\Foundation\Auth\RegistersUsers;

//use App\AdRepairShop;
use App\User;
use App\AdRepairShop;

class AdRepairShopController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        return view('admin_repairshop.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin_repairshop.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6',
            'start_time' => 'required',
            'end_time' => 'required',
            'lat' => 'required',
            'lng' => 'required'
        ]);

        //return $request;

        $Repair = new AdRepairShop;
        $Repair->name = $request->input('name');
        $Repair->email = $request->input('email');
        $Repair->password = Hash::make($request['password']);
        $Repair->lat = $request->input('lat');
        $Repair->lng = $request->input('lng');
        $Repair->start_time = $request->input('start_time');
        $Repair->end_time = $request->input('end_time');

        $Repair->type = $request->input('type');
        $Repair->save();

       // return redirect('/vehicle')->with('success', 'Vehicle saved!');
        return redirect('repair')->with('success', 'saved!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('admin_repairshop.show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function showRegForm()
    {
        return view('admin_repairshop.register');
    }

}
