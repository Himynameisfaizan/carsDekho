<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CarsShowcase;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });


// For user side

Route::get('/', [CarsShowcase::class, 'index']);


// For admin side

Route::get('/admin', [AdminController::class, 'admin']);