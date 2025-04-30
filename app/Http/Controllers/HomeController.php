<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        //return view('admin.dashboard');
        $products = Product::all(); // Récupérer tous les utilisateurs
        $productCount = Product::count(); // compter tous les produits
        $userCount = User::count(); // compter tous les utilisateurs


        return view('admin.dashboard',compact('products','productCount','userCount'));
    }
}
