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
    public function scopeFilter($query, $filters)
    {
        
        if($id = $filters['id'])
        {
            $query->where('city_from_id', $id );
            return;
        }
        if($from = $filters['from'])
        {
            $query->whereHas('airportFrom', function($q) use ($from){
                $q->where('cityName', $from);
            });
        }
        if($to = $filters['to'])
        {
            $query->whereHas('airportTo', function($q) use ($to){
                $q->where('cityName', $to);
            });
        }
        if($min = $filters['min'])
        {
            $query->where('flight_cost','>=', $min );
        }
        if($max = $filters['max'])
        {
            $query->where('flight_cost', '<=', $max );

        }
    }
}
