<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class serviceControllerClient extends Controller
{
    public function index(){
        //$products = Product::all();
        return view('client.services.index');
    }
}
