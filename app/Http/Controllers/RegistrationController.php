<?php

namespace App\Http\Controllers;

use App\User;

use App\Http\Requests\RegistrationRequest;

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

    public function store(RegistrationRequest $request)
    {

    	// tutorial is missing bcrypt
    	//$user = User::create(request(['name','email','password']));

    	$user = User::create([ 

			'name' => request('name'),
			'email' => request('email'),
			'password' => bcrypt(request('password'))

		]);

    	auth()->login($user);

    	return redirect()->home();

    }
}
