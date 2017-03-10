<?php

namespace App\Http\Controllers;

use App\User;

class RegistrationController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest');
    }


    public function create()
    {
        return view('registration.create');
    }

    public function store()
    {
        //validate input

        $this->validate(request(), [
            'name' => 'required',
            'email' => 'required',
            'password' => 'required|confirmed',
        ]);
        //create a user
        $user =User::create([ 
            'name' => request('name'),
            'email' => request('email'),
            'password' => bcrypt(request('password'))
            ]);
        //log new user in
        auth()->login($user);
        //return to home
        return redirect()->home();

    }
}
