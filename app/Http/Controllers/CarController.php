<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Models\Driver;
use App\Models\Make;
use App\Models\ModelCar;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class CarController extends Controller
{
    public function add()
    {
        $drivers = Driver::all();
        $makes = Make::all();
        $models = ModelCar::all();
        return view('car.add', compact('drivers', 'makes', 'models'));
    }


    public function save(Request $request)
    {
        Car::create([
            'driver_id' => $request->get('driver_id'),
            'make_id' => $request->get('make_id'),
            'model_id' => $request->get('model_id'),
            'manufacture_year' => $request->get('manufacture_year'),
            'color' => $request->get('color'),
            'technical_inspection' => $request->get('technical_inspection'),
            'license_plate' => $request->get('license_plate'),
            'car_type' => $request->get('car_type'),
        ]);

        return redirect(route('car.list'));
    }


    public function list()
    {
        $cars = Car::all();
        return view('car.list', compact('cars'));
    }


    public function modal(Driver $driver)
    {
        return view('car.modal', compact('driver'));
    }


    public function show(Car $car)
    {
        $drivers = Driver::all();
        $makes = Make::all();
        $models = ModelCar::all();
        return view('car.edit', compact('car', 'drivers', 'makes', 'models'));
    }


    public function update(Request $request, Car $car)
    {
        $car->driver_id = $request->get('driver_id');
        $car->make_id = $request->get('make_id');
        $car->model_id = $request->get('model_id');
        $car->manufacture_year = $request->get('manufacture_year');
        $car->color = $request->get('color');
        $car->technical_inspection = $request->get('technical_inspection');
        $car->license_plate  = $request->get('license_plate');
        $car->car_type = $request->get('car_type');
        $car->update();

        return redirect(route('car.list'));
    }


    public function delete(Car $car)
    {
        $car->delete();
        return redirect(route('car.list'));
    }
}
