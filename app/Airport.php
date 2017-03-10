<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Airport extends Model
{
    //
    public function flights()
    {
        //an airport has many flights 
        return $this->hasMany(Flight::class, 'city_from_id', 'id');
    }
}
