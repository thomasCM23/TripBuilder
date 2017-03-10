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
    public function scopeFilter($query, $filters)
    {
        
        if($search = $filters)
        {
            $query->where('code', $search )->orWhere('name', $search)->orWhere('cityName', $search)->orWhere('countryName', $search);
            return;
        }
    }
}
