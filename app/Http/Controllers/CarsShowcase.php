<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use App\Models\Car;
use App\Models\Car_lead;
use App\Models\Car_preference;
use Illuminate\Http\Request;

class CarsShowcase extends Controller
{
    public function index()
    {
        $banner = Banner::all();
        $latest_cars = Car::where('category', 'latest')->get();
        $searched_cars = Car::where('category', 'most_searched')->get();
        return view('home.index', ['banner' => $banner, 'searched_cars' => $searched_cars, 'latest_cars' => $latest_cars]);
    }

    public function storeLead(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'phone' => 'required|numeric',
            'email' => 'nullable|email',
            'car_type' => 'required|array|min:1'
        ]);

        $lead = Car_lead::create([
            'name' => $request->name,
            'phone' => $request->phone,
            'email' => $request->email,
            'address' => $request->address
        ]);
        
        if ($request->has('car_type')) {
            foreach ($request->car_type as $type) {
                Car_preference::create([
                    'car_lead_id' => $lead->id,
                    'car_type' => $type
                ]);
            }
        }

        return redirect()->back()->with('success', 'Thank you! We will contact you soon.');
    }
}
