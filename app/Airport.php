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
            $query->where('code', 'like', '%'.$search. '%' )
            ->orWhere('name', 'like', '%'.$search. '%')
            ->orWhere('cityName', 'like', '%'.$search. '%')
            ->orWhere('countryName', 'like', '%'.$search. '%');
            return;
        }
    }
}
