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
Route::get('/admin/banner', [AdminController::class, 'aadminBanner']);
Route::get('/admin/search-car', [AdminController::class, 'aadminSearchedCar']);
Route::get('/admin/latest-car', [AdminController::class, 'aadminLatestCar']);