<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\BannerController;
use App\Http\Controllers\CarController;
use App\Http\Controllers\CarsShowcase;
use Illuminate\Support\Facades\Route;

// User Home Page
Route::get('/', [CarsShowcase::class, 'index']);
Route::post('/submit-lead', [CarsShowcase::class, 'storeLead'])->name('submit.lead');

Route::get('/login', [AdminController::class, 'showLogin'])->name('login');
Route::post('/login', [AdminController::class, 'login'])->name('login.post');
Route::post('/logout', [AdminController::class, 'logout'])->name('logout');

Route::middleware(['auth'])->group(function () {

    Route::get('/admin', [AdminController::class, 'admin']);

    // car
    Route::get('admin/latest-car', [CarController::class, 'index']);
    Route::post('admin/latest-car', [CarController::class, 'carStore']);
    Route::delete('admin/latest-car/{id}', [CarController::class, 'destroy']);
    Route::get('admin/edit-cars/{id}', [CarController::class, 'edit']);
    Route::put('admin/edit-cars/{id}', [CarController::class, 'editCarImage']);

    // banner 
    Route::get('/admin/banner', [BannerController::class, 'index']);
    Route::post('admin/banner', [BannerController::class, 'store']);
    Route::get('admin/banner-edit/{id}', [BannerController::class, 'edit']);
    Route::put('admin/banner/{id}', [BannerController::class, 'updateBanner']);
    Route::delete('admin/banner/{id}', [BannerController::class, 'destroy']);
});
