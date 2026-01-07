<?php

namespace App\Http\Controllers;

use App\Models\Car;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;

class CarController extends Controller
{
    public function index()
    {
        $car = Car::all();
        return view('admin.latestCar', ['car' => $car]);
    }

    public function carStore(Request $request)
    {

        $request->validate([
            'name' => 'required',
            'price' => 'required|numeric',
            'imageUpload' => 'required|image',
            'category' => 'required'
        ]);
        $path = $request->file('imageUpload')->store('cars', 'public');

        Car::create([
            'car_name' => $request->name,
            'price' => $request->price,
            'car_image_path' => $path,
            'category' => $request->category
        ]);

        return redirect()->back()->with('success', 'car details uploaded successfully');
    }

    public function destroy($id)
    {
        $cars = Car::find($id);

        if ($cars->car_image_path) {
            Storage::disk('public')->delete($cars->car_image_path);
        }

        $cars->delete();

        return redirect()->back()->with('success', 'your car details deleted successfully');
    }

    public function edit($id)
    {
        $cars = Car::find($id);

        return view('admin.editCars', ['cars' => $cars]);
    }

    public function editCarImage(Request $request, $id)
    {
        $cars = Car::find($id);

        if ($request->hasFile('imageUpload')) {
            Storage::disk('public')->delete($cars->car_image_path);
            $path = $request->file('imageUpload')->store('cars', 'public');

            $cars->car_image_path = $path;
        }

        $cars->car_name = $request->name;
        $cars->price = $request->price;
        $cars->category = $request->category;

        $cars->save();

        return Redirect('admin/latest-car')->with('success', 'car details has updated successfully');
    }
}
