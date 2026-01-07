@extends('layout.dashboard')
@section('content')
    <div class="card">
        <div class="card-body">
            <a href="{{route('customer.add')}}" class="btn btn-secondary btn-sm mdi mdi-plus-circle"
               style="margin-bottom: 10px">ADD</a>
            <h4 class="card-title text-center">Customer List</h4>
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
                        <td>Total Trips</td>
                        <td>Wallet Balance</td>
                        <td>Operations</td>
                    </tr>
                    </thead>
                    <tbody class="text-center">
                    @foreach($customers as $customer)
                        <tr>
                            <td>{{$customer->first_name}}</td>
                            <td>{{$customer->last_name}}</td>
                            <td>{{$customer->phone_number}}</td>
                            <td>{{$customer->email}}</td>
                            <td>{{$customer->username}}</td>
                            <td>@if($customer->gender == 1)
                                    male
                                @else
                                    female
                                @endif</td>
                            <td>{{$customer->birth_date}}</td>
                            <td>{{$customer->province->name}}</td>
                            <td>{{$customer->city->name}}</td>
                            <td>{{$customer->total_trips}}</td>
                            <td>{{$customer->wallet_balance}}</td>
                            <td>
                                <a href="{{route('customer.show', ['customer' => $customer])}}"
                                   class="btn btn-info btn-sm mdi mdi-pencil">Edit</a>
                                <a href="{{route('customer.delete', ['customer' => $customer])}}"
                                   class="btn btn-danger btn-sm mdi mdi-delete">Delete</a>
                                <a href="{{route('address.list', ['customer' => $customer])}}"
                                   onclick="openAddress(this);return false"
                                   class="btn btn-success btn-sm mdi mdi-home">Addresses</a>
                                <a href="{{route('trip.modal', ['customer' => $customer])}}"
                                   onclick="openTrip(this);return false"
                                   class="btn btn-primary btn-sm mdi mdi-airplane">Trips</a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="modal" id="AddressList">               {{-- Address Modal --}}
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
    <div class="modal" id="TripList">               {{-- Trip Modal --}}
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
        function openAddress(el) {
            $.ajax
            ({
                url: $(el).attr('href'),
                method: 'GET',
                success: function (result) {
                    $('.modal-body').html(result);
                    $('#AddressList').modal('toggle');
                }
            })
        }

        function addAddress(el) {
            $.ajax({
                url: $(el).attr('href'),
                method: 'GET',
                success: function (result) {
                    $('#Modal').find('.modal-body').html(result);
                    $('#Modal').modal('toggle');
                }
            })
        }

        function showAddress(el) {
            $.ajax({
                url: $(el).attr('href'),
                method: 'GET',
                success: function (result) {
                    $('#Modal').find('.modal-body').html(result);
                    $('#Modal').modal('toggle');
                }
            })
        }

        function openTrip(el) {
            $.ajax
            ({
                url: $(el).attr('href'),
                method: 'GET',
                success: function (result) {
                    $('.modal-body').html(result);
                    $('#TripList').modal('toggle');
                }
            })
        }
    </script>
@endsection
