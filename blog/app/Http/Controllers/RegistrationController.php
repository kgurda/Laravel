<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class RegistrationController extends Controller
{
    //
    public function create()
    {
        return view('sessions.create');
    }

    public function store()
    {
        //validate, create, save, sign in and redirect to homepage

        $this->validate(\request(), [
            'name'=>'required',
            'email'=>'required|email',
            'password'=>'required'

        ]);

        $user = User::create(request(['name', 'email', 'password']));

        auth()->login($user);
        return redirect('/');
    }
}
