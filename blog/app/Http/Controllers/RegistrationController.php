<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Hash;

class RegistrationController extends Controller
{
    //
    public function create()
    {
        return view('registration.create');
    }

    public function store()
    {
        //validate, create, save, sign in and redirect to homepage

        $this->validate(\request(), [
            'name'=>'required',
            'email'=>'required|email',
            'password'=>'required|confirmed'

        ]);

        $user = User::create([
            'name' => request('name'),
            'email' => request('email'),
            'password' => Hash::make(request('password'))
        ]);

        auth()->login($user);
        return redirect('/');
    }
}
