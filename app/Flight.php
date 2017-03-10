<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Flight extends Model
{
    //
    public function airportFrom()
    {
        //a flight belongs to an airport
        return $this->belongsTo(Airport::class, 'city_from_id', 'id');
    }
    public function airportTo()
    {
        //a flight goes to an airport
        return $this->belongsTo(Airport::class, 'city_to_id', 'id');
    }
}
