<?php

namespace App\Http\Controllers;

use App\Models\Car_lead;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function admin()
    {
        $car = Car_lead::all();
        return view('admin.admin', ['car' => $car]);
    }
}
