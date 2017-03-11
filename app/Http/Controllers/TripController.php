<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Trip;
use App\Flight;

class TripController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $trips = Trip::latest()->paginate(15);
        return view('trip.index', compact('trips'));

    }
    public function store()
    {
        Trip::create([
            'user_id' => auth()->id(),
            'flight_id' => request('flightID')
        ]);

        return redirect('/trip');

    }
    public function destroy(Trip $trip)
    {
        if(auth()->id() == $trip->user_id)
        {
            $trip->delete();
        }
        return redirect('/trip');
    }
}
