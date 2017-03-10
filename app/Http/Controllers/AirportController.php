<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Flight;
use App\Airport;

class AirportController extends Controller
{
    //
    public function index()
    {
        //geting 15 random flights that exist in the db
        $airports = Airport::orderBy('name')->filter(request('search'))->paginate(15);

        return view('airports.index', compact('airports'));
    }
}
