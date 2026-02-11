@extends('layout.dashboard')
@section('content')
    <div class="card">
        <div class="card-body">
            <a href="{{route('car.add')}}" class="btn btn-secondary btn-sm mdi mdi-plus-circle"
               style="margin-bottom: 10px">ADD</a>
            <h4 class="card-title text-center">Car List</h4>
            <div class="table-responsive">
                <table class="table table-hover">
                    <thead class="text-center">
                    <tr class="table-dark">
                        <td>Driver</td>
                        <td>Make</td>
                        <td>Model</td>
                        <td>Manufacture Year</td>
                        <td>Color</td>
                        <td>Technical Inspection</td>
                        <td>License Plate</td>
                        <td>Car Type</td>
                        <td>Operations</td>
                    </tr>
                    </thead>
                    <tbody class="text-center">
                    @foreach($cars as $car)
                        <tr>
                            <td>{{$car->driver->first_name}}</td>
                            <td>{{$car->make->title}}</td>
                            <td>{{$car->model->title}}</td>
                            <td>{{$car->manufacture_year}}</td>
                            <td>{{$car->color}}</td>
                            <td>@if($car->technical_inspection == 1)
                                    yes
                                @else
                                    no
                                @endif</td>
                            <td>{{$car->license_plate}}</td>
                            <td>@if($car->car_type == 1)
                                    Economy
                                @elseif($car->car_type == 2)
                                    VIP
                                @elseif($car->car_type == 3)
                                    Van
                                @endif
                            </td>
                            <x-button
                                :edit-url="route('car.show', $car)"
                                :delete-url="route('car.delete', $car)"
                            />
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
