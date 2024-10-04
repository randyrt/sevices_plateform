<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{

    public function showDashbord ()
    {
        return view('admin.dashbord');
    }

    public function listClientEmail ()
    {
         return view ('admin.dashbord',
        [
            'clients' =>  Client::latest()->paginate(10)
        ]
      );
    }
}
