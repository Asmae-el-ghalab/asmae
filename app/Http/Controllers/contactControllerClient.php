<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class contactControllerClient extends Controller
{
    public function index(){
        return view('client.contacts.index');
    }
}
