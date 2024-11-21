<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    // return view('welcome');
    return view('home');
});

Route::resource('/products', ProductController::class);
Route::get('/products/pdf/{id}', [ProductController::class, 'pdf'])->name('pdf');