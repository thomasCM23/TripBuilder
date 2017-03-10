<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Flights extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //here i will assume that there is only one flight from city a to city b at specified time
        //simpler that way
        Schema::create('flights', function (Blueprint $table) {
            $table->increments('id')->unique();
            $table->integer('city_from_id');
            $table->integer('city_to_id');
            $table->date('time_departure');
            $table->enum('flight_type', ['Economy', 'Premium', 'Business', 'First']);
            $table->double('flight_cost');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::dropIfExists('flights');
    }
}
