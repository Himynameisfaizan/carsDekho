<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CarsShowcase extends Controller
{
    public function index()
    {
        return view('home.index');
    }
}
