<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\BannerController;
use App\Http\Controllers\CarController;
use App\Http\Controllers\CarsShowcase;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });


// For user side

Route::get('/', [CarsShowcase::class, 'index']);


// For admin side

Route::get('/admin', [AdminController::class, 'admin']);

// Cars routing
Route::get('admin/latest-car', [CarController::class, 'index']);
Route::post('admin/latest-car', [CarController::class, 'carStore']);
Route::delete('admin/latest-car/{id}', [CarController::class, 'destroy']);
Route::get('admin/edit-cars/{id}', [CarController::class, 'edit']);
Route::put('admin/edit-cars/{id}', [CarController::class, 'editCarImage']);

// Banners Routing
Route::get('/admin/banner', [BannerController::class, 'index']);
Route::post('admin/banner', [BannerController::class, 'store']);
Route::get('admin/banner-edit/{id}', [BannerController::class, 'edit']);
Route::put('admin/banner/{id}', [BannerController::class, 'updateBanner']);
Route::delete('admin/banner/{id}', [BannerController::class, 'destroy']);
