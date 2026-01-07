@extends('layout.dashboard')
@section('content')
    <div class="card">
        <div class="card-body">
            <a href="{{route('model.add')}}" class="btn btn-secondary btn-sm mdi mdi-plus-circle" style="margin-bottom: 10px">ADD</a>
            <h4 class="card-title text-center">Model List</h4>
            <div class="table-responsive">
                <table class="table table-hover">
                    <thead class="text-center">
                    <tr class="table-dark">
                        <td>Make</td>
                        <td>Model</td>
                        <td>Operations</td>
                    </tr>
                    </thead>
                    <tbody class="text-center">
                    @foreach($models as $model)
                        <tr>
                            <td>{{$model->make->title}}</td>
                            <td>{{$model->title}}</td>
                            <td>
                                <a href="{{route('model.show', ['model' => $model])}}" class="btn btn-info btn-sm">Edit</a>
                                <a href="{{route('model.delete', ['model' => $model])}}" class="btn btn-danger btn-sm">Delete</a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
