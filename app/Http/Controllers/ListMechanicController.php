<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

use App\ListMechanic;
use App\User;

class ListMechanicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mechanics = ListMechanic::all();
        return $mechanics;
         return view('list_mechanic.index', compact('mechanics'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('list_mechanic.create');
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
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6',
            'ln' => 'required',
            'fn' => 'required',
            'phonenum' => 'required',
            'availability' => 'required',
            'lat' => 'required',
            'lng' => 'required'
        ]);

        $Mech = new ListMechanic;
        $Mech->email = $request->input('email');
        $Mech->password = Hash::make($request['password']);
        $Mech->ln = $request->input('lname');
        $Mech->fn = $request->input('fname');
        $Mech->mi = $request->input('mi');
        $Mech->phonenum = $request->input('phonenum');
        $Mech->availability = $request->input('availability');
        $Mech->lat = $request->input('lat');
        $Mech->lng = $request->input('lng');
        $Mech->lng = $request->input('lng');        
        $Mech->type = $request->input('type');

        //$Mech->Rpid = auth()->AdRepair()->Rpid;
        $Mech->save();

        
       // return redirect('/vehicle')->with('success', 'Vehicle saved!');
        return redirect('mechaniclist')->with('success', 'saved!');
    }
    

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

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
