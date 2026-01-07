@extends('layout.dashboard')
@section('content')
    <div class="col-12 grid-margin">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title text-center" style="margin-bottom: 40px">Editing Customer</h4>
                <form method="post" action="{{route('customer.update', ['customer' => $customer])}}">
                    @csrf
                    <div class="row">               {{-- row = 1 --}}
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">First Name</label>
                                <div class="col-sm-9">
                                    <input type="text" name="first_name" class="form-control"
                                           value="{{$customer->first_name}}">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Last Name</label>
                                <div class="col-sm-9">
                                    <input type="text" name="last_name" class="form-control"
                                           value="{{$customer->last_name}}">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">               {{-- row = 2 --}}
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Phone Number</label>
                                <div class="col-sm-9">
                                    <input type="number" name="phone_number" class="form-control"
                                           value="{{$customer->phone_number}}">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Email</label>
                                <div class="col-sm-9">
                                    <input type="email" name="email" class="form-control" value="{{$customer->email}}">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">               {{-- row = 3 --}}
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Username</label>
                                <div class="col-sm-9">
                                    <input type="text" name="username" class="form-control"
                                           value="{{$customer->username}}">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Password</label>
                                <div class="col-sm-9">
                                    <input type="password" name="password" class="form-control"
                                           value="{{$customer->password}}">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">               {{-- row = 4 --}}
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Gender</label>
                                <div class="col-sm-9">
                                    <select class="form-control" name="gender">
                                        <option value="1" @if($customer->gender == 1) selected @endif>Male</option>
                                        <option value="2" @if($customer->gender == 2) selected @endif>Female</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Date of Birth</label>
                                <div class="col-sm-9">
                                    <input class="form-control" type="date" name="birth_date" placeholder="dd/mm/yyyy"
                                           value="{{$customer->birth_date}}">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">               {{-- row = 5 --}}
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Province</label>
                                <div class="col-sm-9">
                                    <select class="form-control" name="province_id">
                                        @foreach($provinces as $province)
                                            <option value="{{$province->id}}"
                                                    @if($province->id == $customer->province_id) selected @endif>{{$province->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">City</label>
                                <div class="col-sm-9">
                                    <select class="form-control" name="city_id">
                                        @foreach($cities as $city)
                                            <option value="{{$city->id}}"
                                                    @if($city->id == $customer->city_id) selected @endif>{{$city->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">               {{-- row = 6 --}}
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Total Trips</label>
                                <div class="col-sm-9">
                                    <input type="text" name="total_trips" class="form-control"
                                           value="{{$customer->total_trips}}">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Wallet Balance</label>
                                <div class="col-sm-9">
                                    <input type="text" name="wallet_balance" class="form-control"
                                           value="{{$customer->wallet_balance}}">
                                </div>
                            </div>
                        </div>
                    </div>
                    <h6 class="card-title text-center" style="margin-top: 30px; margin-bottom: 30px">Customer
                        Address</h6>
                    <div class="address-wrap new-address d-none">               {{-- row = button + --}}
                        <div class="col-md-12">
                            <div class="form-group row">
                                <input name="address_id[]" value="" type="hidden">
                                <label class="col-form-label">Title</label>
                                <div class="col-sm-1">
                                    <input type="text" name="title[]" class="form-control" placeholder="title">
                                </div>
                                <label class="col-form-label">Full Address</label>
                                <div class="col-sm-4">
                                    <textarea name="address[]" class="form-control"
                                              placeholder="enter your address"></textarea>
                                </div>
                                <label class="col-form-label">Postal Code</label>
                                <div class="col-sm-2">
                                    <input type="text" name="postal_code[]" class="form-control" placeholder=". . .">
                                </div>
                                <label class="col-form-label">Unit</label>
                                <div class="col-sm-1">
                                    <input type="text" name="unit[]" class="form-control" placeholder=". . .">
                                </div>
                                <div class="col-sm-1">
                                    <button type="button" class="btn btn-primary btn-sm"
                                            onclick="addAddress();return false">+
                                    </button>
                                    <button type="button" class="btn btn-danger btn-sm"
                                            onclick="removeAddress(this);return false">-
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    @foreach($customer->addresses as $address)
                        <div class="address-wrap">
                            <input name="address_id[]" value="{{$address->id}}" type="hidden">
                            <div class="col-md-12">
                                <div class="form-group row">
                                    <label class="col-form-label">Title</label>
                                    <div class="col-sm-1">
                                        <input type="text" name="title[]" class="form-control" placeholder="title"
                                               value="{{$address->title}}">
                                    </div>
                                    <label class="col-form-label">Full Address</label>
                                    <div class="col-sm-4">
                                    <textarea name="address[]" class="form-control"
                                              placeholder="enter your address">{{$address->address}}</textarea>
                                    </div>
                                    <label class="col-form-label">Postal Code</label>
                                    <div class="col-sm-2">
                                        <input type="text" name="postal_code[]" class="form-control" placeholder=". . ."
                                               value="{{$address->postal_code}}">
                                    </div>
                                    <label class="col-form-label">Unit</label>
                                    <div class="col-sm-1">
                                        <input type="text" name="unit[]" class="form-control" placeholder=". . ."
                                               value="{{$address->unit}}">
                                    </div>
                                    <div class="col-sm-1">
                                        <button type="button" class="btn btn-primary btn-sm"
                                                onclick="addAddress();return false">+
                                        </button>
                                        @if($loop->index)
                                            <button type="button" class="btn btn-danger btn-sm"
                                                    onclick="removeAddress(this);return false">-
                                            </button>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                    @if(! $customer->addresses()->count())
                        <div class="address-wrap">
                            <input name="address_id[]" type="hidden">
                            <div class="col-md-12">
                                <div class="form-group row">
                                    <label class="col-form-label">Title</label>
                                    <div class="col-sm-1">
                                        <input type="text" name="title[]" class="form-control" placeholder="title">
                                    </div>
                                    <label class="col-form-label">Full Address</label>
                                    <div class="col-sm-4">
                                    <textarea name="address[]" class="form-control"
                                              placeholder="enter your address"></textarea>
                                    </div>
                                    <label class="col-form-label">Postal Code</label>
                                    <div class="col-sm-2">
                                        <input type="text" name="postal_code[]" class="form-control"
                                               placeholder=". . .">
                                    </div>
                                    <label class="col-form-label">Unit</label>
                                    <div class="col-sm-1">
                                        <input type="text" name="unit[]" class="form-control" placeholder=". . .">
                                    </div>
                                    <div class="col-sm-1">
                                        <button type="button" class="btn btn-primary btn-sm"
                                                onclick="addAddress();return false">+
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endif
                    <div class="addresses"></div>
                    <div class="col-md-6">
                        <button type="submit" class="btn btn-success mb-2" style="margin-top: 30px">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script>
        function addAddress() {
            let address = $('.new-address').clone();
            $(address).removeClass('new-address').removeClass('d-none');
            $('.addresses').append(address);
        }

        function removeAddress(el) {
            $(el).parents('.address-wrap').first().remove();
        }
    </script>
@endsection
