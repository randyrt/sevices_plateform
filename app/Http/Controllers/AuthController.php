<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Requests\LoginRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\RegisterRequest;


class AuthController extends Controller
{
    public function showRegister ()
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


    public function showLogin()
    {
        return view('auth.login');
    }

    public function doLogin(LoginRequest $request)
    {
       
         $credentials =  $request->validated();


        if(Auth::attempt($credentials, (bool) $request->remember)){
            $request->session()->regenerate();
            return redirect()->route('admin.dashbord');
        }

        return back()->withErrors([
            'email' => 'les identifiants fournis sont incorrects',
        ]);
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect()->route('login');
    }
}


    