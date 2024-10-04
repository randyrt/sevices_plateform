<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\RegisterRequest;

class AuthController extends Controller
{
    public function register ()
    {
        return view('auth.register');
    }


    public function doRegister(RegisterRequest $request)
    {

      
        $request->validated();

        $user = User::create([
            "name" => $request->name,
            "email" => $request->email,
            "password" => Hash::make($request->password)
        ]);

        Auth::login($user);

        return redirect()->route('login');
    }   


    public function login()
    {
        return view('auth.login');
    }

    public function dologin(LoginRequest $request)
    {
        $credentials =  $request->validated();


        if(Auth::attempt($credentials, (bool) $request->remember)){
            $request->session()->regenerate();
            return redirect()->intended('dashboard');
        }

        return back()->withErrors([
            'email' => 'les identifiants fournis sont incorrects',
        ]);
    }
}

    