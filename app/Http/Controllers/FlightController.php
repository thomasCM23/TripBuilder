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
        $flights = Flight::inRandomOrder()->paginate(15);

        return view('flights.index', compact('flights'));
    }
}
