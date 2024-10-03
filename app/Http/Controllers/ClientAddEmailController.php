<?php

namespace App\Http\Controllers;


use App\Models\Client;
use Illuminate\View\View;
use App\Http\Requests\ClientRequest;



class ClientAddEmailController extends Controller
{   
     /**
      * Summary of index
      * @return \Illuminate\View\View
      */
     public function index(): View
    {
        return view('home');
    }


    /**
     * Summary of insert
     * @param \App\Http\Requests\ClientRequest $request
     * @return mixed|\Illuminate\Http\RedirectResponse
     */
    public function insert(ClientRequest $request)
    {

        $request->validated();

        $client = new Client();

        $client->email = $request->email;

        $client->save();

       return redirect()->to(url()->previous() . '#message-alert')
       ->with('success', 'Félicitation, votre email a été envoyé avec succès !');

    }
}

