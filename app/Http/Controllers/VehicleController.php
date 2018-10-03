<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ListVehicle;
use App\User;

class VehicleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

       $user_id = auth()->user()->id;
       $id = User::find($user_id);
        return view('vehicle.home')->with('vehicle', $id->vehicle);
    }

    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('vehicle.create');
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
            'platenum' => 'required',
            'brand' => 'required',
            'model' => 'required',
            'color' => 'required'
        ]);

        $vehicle = new ListVehicle;
        $vehicle->type = $request->get('type');
        $vehicle->platenum = $request->input('platenum');
        $vehicle->name = $request->input('name');
        $vehicle->brand = $request->input('brand');
        $vehicle->model = $request->input('model');
        $vehicle->color = $request->get('color');
        $vehicle->id = auth()->user()->id;
        $vehicle->save();

        return redirect('/vehicle')->with('success', 'Vehicle saved!');
        

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($Veid)
    {
        $vehicle = ListVehicle::find($id);
        return view ('vehicle.show')->with('vehicle', $vehicle);
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
}
