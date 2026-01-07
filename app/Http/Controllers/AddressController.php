<?php

namespace App\Http\Controllers;

use App\Models\Address;
use App\Models\Customer;
use http\Message\Body;
use Illuminate\Http\Request;

class AddressController extends Controller
{
    public function add(Request $request)
    {
        $customer = Customer::find($request->customer);
        return view('address.add', compact('customer'));
    }


    public function save(Request $request)
    {
        $customer = Customer::find($request->customer);
        Address::create([
            'customer_id' => $customer->id,
            'title' => $request->get('title'),
            'address' => $request->get('address'),
            'postal_code' => $request->get('postal_code'),
            'unit' => $request->get('unit'),
        ]);

        return [
            'success' => true,
        ];
    }


    public function list(Request $request)
    {
        $customer = Customer::find($request->customer);
        return view('address.list', compact('customer'));
    }


    public function show(Address $address)
    {
        return view('address.edit', compact('address'));
    }


    public function update(Request $request, Address $address)
    {
        $address->title = $request->get('title');
        $address->address = $request->get('address');
        $address->postal_code = $request->get('postal_code');
        $address->unit = $request->get('unit');
        $address->update();

        return [
            'success' => true,
        ];
    }


    public function delete(Address $address)
    {
        $address->delete();
        return [
            'success' => true,
        ];
    }
}
