<?php

namespace App\Http\Controllers;

use App\Models\Make;
use App\Models\ModelCar;
use Illuminate\Http\Request;

class ModelController extends Controller
{
    public function add()
    {
        $makes = Make::all();
        return view('model.add', compact('makes'));
    }

    public function save(Request $request)
    {
        ModelCar::create([
            'make_id' => $request->get('make_id'),
            'title' => $request->get('title'),
        ]);

        return redirect(route('model.list'));
    }


    public function list()
    {
        $models = ModelCar::all();
        return view('model.list', compact('models'));
    }


    public function show(ModelCar $model)
    {
        $makes = Make::all();
        return view('model.edit', compact('model', 'makes'));
    }


    public function update(Request $request, ModelCar $model)
    {
        $model->make_id = $request->get('make_id');
        $model->title = $request->get('title');
        $model->update();

        return redirect(route('model.list'));
    }


    public function delete(ModelCar $model)
    {
        $model->delete();
        return redirect(route('model.list'));
    }
}
