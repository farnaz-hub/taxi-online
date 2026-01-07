@extends('layout.dashboard')
@section('content')
    <div class="card">
        <div class="card-body">
            <a href="{{route('driver.add')}}" class="btn btn-secondary btn-sm mdi mdi-plus-circle"
               style="margin-bottom: 10px">ADD</a>
            <h4 class="card-title text-center">Driver List</h4>
            <div class="table-responsive">
                <table class="table table-hover">
                    <thead class="text-center">
                    <tr class="table-dark">
                        <td>First Name</td>
                        <td>Last Name</td>
                        <td>Phone Number</td>
                        <td>Email</td>
                        <td>Username</td>
                        <td>Gender</td>
                        <td>Birth Date</td>
                        <td>Province</td>
                        <td>City</td>
                        <td>National Code</td>
                        <td>Image</td>
                        <td>Total Trips</td>
                        <td>Total Income</td>
                        <td>License Number</td>
                        <td>License Expired Date</td>
                        <td>Active</td>
                        <td>Rating</td>
                        <td>Operations</td>
                    </tr>
                    </thead>
                    <tbody class="text-center">
                    @foreach($drivers as $driver)
                        <tr>
                            <td>{{$driver->first_name}}</td>
                            <td>{{$driver->last_name}}</td>
                            <td>{{$driver->phone_number}}</td>
                            <td>{{$driver->email}}</td>
                            <td>{{$driver->username}}</td>
                            <td>@if($driver->gender == 1)
                                    male
                                @else
                                    female
                                @endif</td>
                            <td>{{$driver->birth_date}}</td>
                            <td>{{$driver->province->name}}</td>
                            <td>{{$driver->city->name}}</td>
                            <td>{{$driver->national_code}}</td>
                            <td>{{$driver->image}}</td>
                            <td>{{$driver->total_trips}}</td>
                            <td>{{$driver->total_income}}</td>
                            <td>{{$driver->license_number}}</td>
                            <td>{{$driver->license_expired_at}}</td>
                            <td>@if($driver->is_active == 1)
                                    yes
                                @else
                                    no
                                @endif</td>
                            <td>@if($driver->rating == 1)
                                    ★
                                @elseif($driver->rating == 2)
                                    ★★
                                @elseif($driver->rating == 3)
                                    ★★★
                                @elseif($driver->rating == 4)
                                    ★★★★
                                @elseif($driver->rating == 5)
                                    ★★★★★
                                @endif</td>
                            <td>
                                <a href="{{route('driver.show', ['driver' => $driver])}}"
                                   class="btn btn-info btn-sm mdi mdi-pencil">Edit</a>
                                <a href="{{route('driver.delete', ['driver' => $driver])}}"
                                   class="btn btn-danger btn-sm mdi mdi-delete">Delete</a>
                                <a href="{{route('car.modal', ['driver' => $driver])}}"
                                   onclick="openCar(this);return false"
                                   class="btn btn-success btn-sm mdi mdi-car">Cars</a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="modal" id="CarList">               {{-- Car Modal --}}
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body"></div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">close</button>
                </div>
            </div>
        </div>
    </div>

    <script>
        function openCar(el) {
            $.ajax
            ({
                url: $(el).attr('href'),
                method: 'GET',
                success: function (result) {
                    $('.modal-body').html(result);
                    $('#CarList').modal('toggle');
                }
            })
        }
    </script>
@endsection
