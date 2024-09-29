<?php

namespace App\Http\Controllers;

use Illuminate\View\View;
use App\Models\Client;
use App\Http\Requests\ClientRequest;


class ClientAddEmailController extends Controller
{   

     public function index(): View
    {
        return view('home');
    }


    public function create (ClientRequest $request){

        $request->validated();

        $client = new Client();

        $client->email = $request->email;

        $client->save();

        return back()->with('success', 'Votre mail a été bien envoyé').'#success-message';

    }
}
