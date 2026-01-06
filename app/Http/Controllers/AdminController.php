<?php

namespace App\Http\Controllers;

use App\Models\Car_lead;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function admin(){
     $car = Car_lead::all();
        return view('admin.admin', ['car'=>$car]);
    }

    public function aadminBanner(){
        return view('admin.banner');
    }

    public function aadminSearchedCar(){
        return view('admin.searchCar');
    }

    public function aadminLatestCar(){
        return view('admin.latestCar');
    }

}
