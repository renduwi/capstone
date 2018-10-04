<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ServiceReq;
use App\ListMechanic;
use App\User;
use App\ListVehicle;
use DB;
use App\Notifications\NotiMechanic;

class ServiceReqController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user_id = auth()->user()->id;
        $user = DB::table('list_vehicles')->where('user_id', auth()->user()->id)->get();
        
    return view('servicereq.index')->with('serv', $user);
       
    
    //$Serv = ServiceReq::orderBy('Mid')->paginate(5);
        
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    private function calculateDistance($u_lat, $m_lat, $u_lng, $m_lng)
    {
        $R = 6371000; //Radius of the Earth

        $lat_1 = $u_lat * M_PI / 180; //User
        $lat_2 = $m_lat * M_PI / 180; //Mechanic

        $d_lat = ($u_lat - $m_lat) * M_PI / 180;
        $d_lng = ($u_lng - $m_lng) * M_PI / 180;

        $a = pow(sin($d_lat / 2), 2) + cos($u_lat) * cos($m_lat) * pow(sin($d_lng / 2), 2);
        $c = 2 * atan2(sqrt($a), sqrt(1 - $a));

        return $R * $c; //Distance
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        /**
         * E: Try again~
         * R: lng hindi long :3 
         */
        $this->validate($request, [
            'lat' => 'required',
            'lng' => 'required',
            'situation' => 'required'
        ]);


        
        $Serv = new ServiceReq;
        $Serv->user_id = auth()->user()->id;
        $Serv->lat = $request->input('lat');
        $Serv->lng = $request->input('lng');
        $Serv->situation = $request->get('situation');
        $Serv->vehicle = $request->get('vehicle');
        //$Serv->status = $request->get('status');
        $Serv->status = "Mechanic is on the way";
        //Gets the nearest available mechanic
        $mechanics = User::where('availability', "1")
                        ->get();

        $nearestMechanic = null;
        $nearestMech_dist = 1000000000; //1 billion meters

        foreach($mechanics as $mech)
        {
            $m = $this->calculateDistance($request->lat, $mech->lat, $request->lng, $mech->lng);
            if($m < $nearestMech_dist)
            {
                $nearestMech_dist = $m;
                $nearestMechanic = $mech;
            }
        }

        //Sets mechanic availability to 0 and saves it.
        $nearestMechanic->availability = "0";
        $nearestMechanic->save();

        //Saves transaction's mechanic id and then saves it
        $Serv->Mid = $nearestMechanic->id;
        $Serv->save();
        //$Sid = DB::table('service_request')->get('Serv');
        $user = ServiceReq::where('Mid', '!=', auth()->user()->id)->get();

        if (\Notification::send($user, new NotiMechanic(servicereq::latest('Sid')->first())))
        {
        return view('servicereq.show')->with('success', 'saved!');
          //return back()->with('success', 'saved!');;  
        }
        //return redirect('servicereq.show')->with('success', 'saved!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($Sid)
    {
       // $user_id = auth()->user()->Mid;
        $user = ServiceReq::find($user_id);
        return view('servicereq.show')->with('serv', $serv);
        //return view('servicereq.show');
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
