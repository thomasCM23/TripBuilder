<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\User::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => $password ?: $password = bcrypt('secret'),
        'remember_token' => str_random(10),
    ];
});
//to create data for the flights
$factory->define(App\Flight::class, function (Faker\Generator $faker) {
    $start = strtotime("2017-03-01 00:00:00");
    $end =  strtotime("2018-12-31 23:59:59");
    $randomDate = date("Y-m-d H:i:s", rand($start, $end));

    return [
        'city_from_id' => rand(1, 4400),
        'city_to_id' => rand(1, 4400),
        'time_departure' => $randomDate,
        'flight_type' => 'Economy',
        'flight_cost' => rand(150.00, 3000.00)
    ];
});