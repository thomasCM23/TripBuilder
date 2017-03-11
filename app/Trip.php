<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Trip extends Model
{
    //
     protected $fillable = ['user_id', 'flight_id'];
    public function flight()
    {
        return $this->belongsTo(Flight::class, 'flight_id', 'id');
    }
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}
