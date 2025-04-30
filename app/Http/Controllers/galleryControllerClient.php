<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class galleryControllerClient extends Controller
{
    public function index(){
        return view('client.gallery.index');
    }
}
