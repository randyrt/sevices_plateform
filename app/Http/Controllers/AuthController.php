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
        if(Auth::attempt(['email' => $request->email, 'password' => $request->password])){
            return redirect()->intended('dashbord');
        }

        return back()->withErrors([
            'email' => "Les identifians fournis sont incorrects",
        ]);
    }
}

    