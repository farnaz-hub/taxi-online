@extends('layout.dashboard')
@section('content')
    <style>
        .rating {
            direction: rtl;
            display: inline-flex;
        }

        .rating input {
            display: none;
        }

        .rating label {
            font-size: 30px;
            color: #ccc;
            cursor: pointer;
        }

        .rating input:checked ~ label,
        .rating label:hover,
        .rating label:hover ~ label {
            color: gold;
        }
    </style>
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title text-center" style="margin-bottom: 40px">Adding Driver</h4>
                <form method="post" action="{{route('driver.save')}}">
                    @csrf
                    <div class="row">               {{-- row = 1 --}}
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">First Name</label>
                                <div class="col-sm-9">
                                    <input type="text" name="first_name" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Last Name</label>
                                <div class="col-sm-9">
                                    <input type="text" name="last_name" class="form-control">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">               {{-- row = 2 --}}
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Phone Number</label>
                                <div class="col-sm-9">
                                    <input type="text" name="phone_number" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Email</label>
                                <div class="col-sm-9">
                                    <input type="email" name="email" class="form-control">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">               {{-- row = 3 --}}
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Username</label>
                                <div class="col-sm-9">
                                    <input type="text" name="username" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Password</label>
                                <div class="col-sm-9">
                                    <input type="password" name="password" class="form-control">
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
                                        <option value="1">Male</option>
                                        <option value="2">Female</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Date of Birth</label>
                                <div class="col-sm-9">
                                    <input class="form-control" type="date" name="birth_date" placeholder="dd/mm/yyyy">
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
                                            <option value="{{$province->id}}">{{$province->name}}</option>
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
                                            <option value="{{$city->id}}">{{$city->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">               {{-- row = 6 --}}
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">National Code</label>
                                <div class="col-sm-9">
                                    <input type="text" name="national_code" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Image</label>
                                <div class="col-sm-9">
                                    <input type="text" name="image" class="form-control">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">               {{-- row = 7 --}}
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Total Trips</label>
                                <div class="col-sm-9">
                                    <input type="text" name="total_trips" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Total Income</label>
                                <div class="col-sm-9">
                                    <input type="text" name="total_income" class="form-control">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">               {{-- row = 8 --}}
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">License Number</label>
                                <div class="col-sm-9">
                                    <input type="text" name="license_number" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">License Expired Date</label>
                                <div class="col-sm-9">
                                    <input type="date" name="license_expired_at" class="form-control">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">               {{-- row = 9 --}}
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Active</label>
                                <div class="col-sm-9">
                                    <input type="checkbox" style="margin: 10px" name="is_active"
                                           class="form-check-input" value="1">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Rating</label>
                                <div class="col-sm-9">
                                    <div class="rating">
                                        <input type="radio" name="rating" id="star5" value="5">
                                        <label for="star5">★</label>
                                        <input type="radio" name="rating" id="star4" value="4">
                                        <label for="star4">★</label>
                                        <input type="radio" name="rating" id="star3" value="3">
                                        <label for="star3">★</label>
                                        <input type="radio" name="rating" id="star2" value="2">
                                        <label for="star2">★</label>
                                        <input type="radio" name="rating" id="star1" value="1">
                                        <label for="star1">★</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <button type="submit" class="btn btn-success mb-2" style="margin-top: 30px">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
