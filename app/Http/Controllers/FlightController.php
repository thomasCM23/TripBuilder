<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Flight;
use App\Airport;

class FlightController extends Controller
{
    //

    public function index()
    {
        //geting 15 random flights that exist in the db
        $flights = array();
        if(request('id') || request('from') || request('to') || request('min') || request('max')){
            $flights = Flight::orderBy('flight_cost')->filter(request(['id', 'from', 'to', 'min', 'max']))->paginate(20);
        }
        else{
            $flights = Flight::inRandomOrder()->paginate(15);
        }

        return view('flights.index', compact('flights'));
    }
}
