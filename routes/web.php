<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\IncomeController;
use App\Http\Controllers\SettingsController;
use App\Http\Controllers\Client\ProductController as ClientProductController;
use App\Http\Controllers\Client\OrderController as ClientOrderController;
use App\Http\Controllers\contactControllerClient;
use App\Http\Controllers\galleryControllerClient;
use App\Http\Controllers\ProductControllerClient;
use App\Http\Controllers\serviceControllerClient;

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::get('/client', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('client');

Route::middleware('auth')->group(function () {
    Route::get('client/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('client/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('client/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/client/product',[ProductControllerClient::class,"index"])->name('productClient');
    Route::get('/client/service',[serviceControllerClient::class,"index"])->name('serviceClient');
    Route::get('/client/gallery',[galleryControllerClient::class,"index"])->name('galleryClient');
    Route::get('/client/contact',[contactControllerClient::class,"index"])->name('contactClient');
});

//Souhail est ajouté cette partie🐱‍👤
Route::middleware(['auth','admin'])->group(function (){

    Route::get('admin/dashboard',[HomeController::class, 'index'])->name('dashboard');

    Route::get('admin/products',[ProductController::class, 'index'])->name('admin/products');

    Route::get('admin/users',[UsersController::class, 'index'])->name('admin/users');

    Route::get('admin/income',[IncomeController::class, 'index'])->name('admin/income');

    Route::get('admin/settings',[SettingsController::class, 'index'])->name('admin/settings');
});


// Products routes
Route::prefix('dashboard')->middleware(['auth'])->group(function () {
    Route::get('/products', [ProductController::class, 'index'])
        ->name('products.index');
});

require __DIR__.'/auth.php';

//khaliw had les liens hna merci👀
//Route::get('admin/dashboard',[HomeController::class, 'index']);
//Route::get('admin/dashboard',[HomeController::class, 'index'])->middleware(['auth','admin']);