<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    public function add()
    {
        return view('admin.add');
    }


    public function save(Request $request)
    {
        Admin::create([
            'username' => $request->get('username'),
            'password' => Hash::make($request->get('password')),
        ]);

        return redirect(route('admin.list'));
    }


    public function list()
    {
        $admins = Admin::all();
        return view('admin.list', compact('admins'));
    }


    public function show(Admin $admin)
    {
        return view('admin.edit', compact('admin'));
    }


    public function update(Request $request, Admin $admin)
    {
        $admin->username = $request->get('username');
        $admin->password = $request->get('password');
        $admin->update();

        return redirect(route('admin.list'));
    }


    public function delete(Admin $admin)
    {
        $admin->delete();
        return redirect(route('admin.list'));
    }
}
