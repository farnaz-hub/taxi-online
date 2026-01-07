@extends('layout.dashboard')
@section('content')
    <div class="card">
        <div class="card-body">
            <a href="{{route('make.add')}}" class="btn btn-secondary btn-sm mdi mdi-plus-circle" style="margin-bottom: 10px">ADD</a>
            <h4 class="card-title text-center">Make List</h4>
            <div class="table-responsive">
                <table class="table table-hover">
                    <thead class="text-center">
                    <tr class="table-dark">
                        <td>Title</td>
                        <td>Operations</td>
                    </tr>
                    </thead>
                    <tbody class="text-center">
                    @foreach($makes as $make)
                        <tr>
                            <td>{{$make->title}}</td>
                            <td>
                                <a href="{{route('make.show', ['make' => $make])}}" class="btn btn-info btn-sm">Edit</a>
                                <a href="{{route('make.delete', ['make' => $make])}}" class="btn btn-danger btn-sm">Delete</a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
