@extends('layout.dashboard')
@section('content')
    <div class="card">
        <div class="card-body">
            <a href="{{route('trip.add')}}" class="btn btn-secondary btn-sm mdi mdi-plus-circle"
               style="margin-bottom: 10px">ADD</a>
            <h4 class="card-title text-center">Trip List</h4>
            <div class="table-responsive">
                <table class="table table-hover">
                    <thead class="text-center">
                    <tr class="table-dark">
                        <td>Customer</td>
                        <td>Driver</td>
                        <td>Car</td>
                        <td>Origin</td>
                        <td>Destination</td>
                        <td>Price</td>
                        <td>Date</td>
                        <td>Status</td>
                        <td>Start Time</td>
                        <td>End Time</td>
                        <td>Payment Method</td>
                        <td>Operations</td>
                    </tr>
                    </thead>
                    <tbody class="text-center">
                    @foreach($trips as $trip)
                        <tr>
                            <td>{{$trip->customer?->first_name}}</td>
                            <td>{{$trip->driver?->first_name}}</td>
                            <td>{{$trip->car?->model->title}}</td>
                            <td>{{$trip->origin}}</td>
                            <td>{{$trip->destination}}</td>
                            <td>{{$trip->price}}</td>
                            <td>{{$trip->date}}</td>
                            <td>@if($trip->status == 1)
                                    successful
                                @elseif($trip->status == 2)
                                    pending
                                @elseif($trip->status == 3)
                                    canceled
                                @endif</td>
                            <td>{{$trip->started_at}}</td>
                            <td>{{$trip->ended_at}}</td>
                            <td>@if($trip->payment_method == 1)
                                    cash
                                @elseif($trip->payment_method == 2)
                                    online
                                @endif</td>
                            <td>
                                <a href="{{route('trip.show', ['trip' => $trip])}}"
                                   class="btn btn-info btn-sm">Edit</a>
                                <a href="{{route('trip.delete', ['trip' => $trip])}}"
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
