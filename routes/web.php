<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
//list of flights route
Route::get('/', 'FlightController@index')->name('home');
//list of airport route
Route::get('/airports', 'AirportController@index');

//registration route
Route::get('/register', 'RegistrationController@create');
Route::post('/register', 'RegistrationController@store');

//login route
Route::get('/login', 'SessionsController@create')->name('login');
Route::post('/login', 'SessionsController@store');
Route::get('/logout', 'SessionsController@destroy');

//trip route
Route::post('/trip', 'TripController@store'); //create new trip
Route::get('/trip', 'TripController@index'); //list of the trips
Route::delete('/trip/{trip}', 'TripController@destroy'); //delete trip