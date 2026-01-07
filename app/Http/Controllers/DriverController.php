<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Models\City;
use App\Models\Driver;
use App\Models\Province;
use Illuminate\Http\Request;

class DriverController extends Controller
{
    public function add()
    {
        $provinces = Province::all();
        $cities = City::all();
        return view('driver.add', compact('provinces', 'cities'));
    }


    public function save(Request $request)
    {
        Driver::create([
            'first_name' => $request->get('first_name'),
            'last_name' => $request->get('last_name'),
            'phone_number' => $request->get('phone_number'),
            'email' => $request->get('email'),
            'username' => $request->get('username'),
            'password' => $request->get('password'),
            'gender' => $request->get('gender'),
            'birth_date' => $request->get('birth_date'),
            'national_code' => $request->get('national_code'),
            'province_id' => $request->get('province_id'),
            'city_id' => $request->get('city_id'),
            'is_active' => $request->get('is_active', 0),
            'rating' => $request->get('rating'),
            'license_number' => $request->get('license_number'),
            'license_expired_at' => $request->get('license_expired_at'),
            'total_trips' => $request->get('total_trips'),
            'total_income' => $request->get('total_income'),
            'image' => $request->get('image'),
        ]);

        return redirect(route('driver.list'));
    }


    public function list(Request $request)
    {
        $cars = Car::find($request->car_id);
        $drivers = Driver::all();
        return view('driver.list', compact('drivers', 'cars'));
    }


    public function show(Driver $driver)
    {
        $provinces = Province::all();
        $cities = City::all();
        return view('driver.edit', compact('driver', 'provinces', 'cities'));
    }


    public function update(Request $request, Driver $driver)
    {
        $driver->first_name = $request->get('first_name');
        $driver->last_name = $request->get('last_name');
        $driver->phone_number = $request->get('phone_number');
        $driver->email = $request->get('email');
        $driver->username = $request->get('username');
        $driver->password = $request->get('password');
        $driver->gender = $request->get('gender');
        $driver->birth_date = $request->get('birth_date');
        $driver->national_code = $request->get('national_code');
        $driver->province_id = $request->get('province_id');
        $driver->city_id = $request->get('city_id');
        $driver->is_active = $request->get('is_active', 0);
        $driver->rating = $request->get('rating');
        $driver->license_number = $request->get('license_number');
        $driver->license_expired_at = $request->get('license_expired_at');
        $driver->total_trips = $request->get('total_trips');
        $driver->total_income = $request->get('total_income');
        $driver->image = $request->get('image');
        $driver->update();

        return redirect(route('driver.list'));
    }


    public function delete(Driver $driver)
    {
        $driver->delete();
        return redirect(route('driver.list'));
    }
}
