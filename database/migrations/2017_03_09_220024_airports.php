<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Airports extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //https://gist.github.com/tanerdogan/10103011
        // i go this info from this github user
        // i did not want to copy over 4000 records manually
        //but basically it defines what an airport is
         Schema::create('airports', function (Blueprint $table) {
            $table->increments('id')->unique();
            $table->string('code');
            $table->string('name');
            $table->string('cityCode');
            $table->string('cityName');
            $table->string('countryCode');
            $table->string('countryName');
            $table->string('timezone');
            $table->string('lat');
            $table->string('lon');
            $table->integer('numAirports');
            $table->string('city');
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
        Schema::dropIfExists('airports');
    }
}
