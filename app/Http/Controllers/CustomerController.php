<?php

namespace App\Http\Controllers;

use App\Models\Address;
use App\Models\City;
use App\Models\Customer;
use App\Models\Province;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function add()
    {
        $provinces = Province::all();
        $cities = City::all();
        return view('customer.add', compact('provinces', 'cities'));
    }


    public function save(Request $request)
    {
        $customer = Customer::create([
            'first_name' => $request->get('first_name'),
            'last_name' => $request->get('last_name'),
            'phone_number' => $request->get('phone_number'),
            'email' => $request->get('email'),
            'username' => $request->get('username'),
            'password' => $request->get('password'),
            'gender' => $request->get('gender'),
            'birth_date' => $request->get('birth_date'),
            'province_id' => $request->get('province_id'),
            'city_id' => $request->get('city_id'),
            'total_trips' => $request->get('total_trips'),
            'wallet_balance' => $request->get('wallet_balance'),
        ]);


        $titles = $request->get('title');
        $addresses = $request->get('address', []);
        $postal_codes = $request->get('postal_code');
        $units = $request->get('unit');

        foreach ($addresses as $index => $address) {
            if (!empty($address)) {
                Address::create([
                    'customer_id' => $customer->id,
                    'title' => $titles[$index],
                    'address' => $address,
                    'postal_code' => $postal_codes[$index],
                    'unit' => $units[$index],
                ]);
            }
        }

        return redirect(route('customer.list'));
    }


    public function list()
    {
        $customers = Customer::all();
        return view('customer.list', compact('customers'));
    }


    public function show(Customer $customer)
    {
        $provinces = Province::all();
        $cities = City::all();
        return view('customer.edit', compact('customer', 'provinces', 'cities'));
    }


    public function update(Request $request, Customer $customer)
    {
        $customer->first_name = $request->get('first_name');
        $customer->last_name = $request->get('last_name');
        $customer->phone_number = $request->get('phone_number');
        $customer->email = $request->get('email');
        $customer->username = $request->get('username');
        $customer->password = $request->get('password');
        $customer->gender = $request->get('gender');
        $customer->birth_date = $request->get('birth_date');
        $customer->province_id = $request->get('province_id');
        $customer->city_id = $request->get('city_id');
        $customer->total_trips = $request->get('total_trips');
        $customer->wallet_balance = $request->get('wallet_balance');
        $customer->update();

        $titles = $request->get('title');
        $addresses = $request->get('address', []);
        $postal_codes = $request->get('postal_code');
        $units = $request->get('unit');
        $address_ids = $request->get('address_id', []);

        $existingIds = $customer->addresses()->pluck('id')->toArray();       //deleting addresses
        $deletedIds = array_diff($existingIds, $address_ids);
        Address::whereIn('id', $deletedIds)->delete();

        foreach ($addresses as $index => $address) {
            if (!empty($address_ids[$index]) && !empty($address)) {                 //updating addresses
                $old_address = Address::find($address_ids[$index]);
                $old_address->title = $titles[$index];
                $old_address->address = $address;
                $old_address->postal_code = $postal_codes[$index];
                $old_address->unit = $units[$index];
                $old_address->update();
            } else {
                if (!empty($address)) {                                             //creating new addresses
                    Address::create([
                        'customer_id' => $customer->id,
                        'title' => $titles[$index],
                        'address' => $address,
                        'postal_code' => $postal_codes[$index],
                        'unit' => $units[$index],
                    ]);
                }
            }
        }

        return redirect(route('customer.list'));
    }

    public function delete(Customer $customer)
    {
        $customer->delete();
        return redirect(route('customer.list'));
    }
}
