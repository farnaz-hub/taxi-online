@extends('layout.dashboard')
@section('content')
    <div class="card">
        <div class="card-body">
            <a href="{{route('admin.add')}}" class="btn btn-secondary btn-sm mdi mdi-plus-circle"
               style="margin-bottom: 10px">ADD</a>
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
                            <x-button
                                :edit-url="route('admin.show', $admin)"
                                :delete-url="route('admin.delete', $admin)"
                            />
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
