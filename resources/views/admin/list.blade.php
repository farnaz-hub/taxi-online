@extends('layout.dashboard')
@section('content')
    <div class="card">
        <div class="card-body">
            <a href="{{route('admin.add')}}" class="btn btn-secondary btn-sm mdi mdi-plus-circle" style="margin-bottom: 10px">ADD</a>
            <h4 class="card-title text-center">Admin List</h4>
            <div class="table-responsive">
                <table class="table table-hover">
                    <thead class="text-center">
                    <tr class="table-dark">
                        <td>Username</td>
                        <td>Operations</td>
                    </tr>
                    </thead>
                    <tbody class="text-center">
                    @foreach($admins as $admin)
                        <tr>
                            <td>{{$admin->username}}</td>
                            <td>
                                <a href="{{route('admin.show', ['admin' => $admin])}}"
                                   class="btn btn-info btn-sm">Edit</a>
                                <a href="{{route('admin.delete', ['admin' => $admin])}}"
                                   class="btn btn-danger btn-sm">Delete</a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
