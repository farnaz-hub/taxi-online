@extends('layout.dashboard')
@section('content')
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title text-center" style="margin-bottom: 40px">Adding Car</h4>
                <form method="post" action="{{route('car.save')}}">
                    @csrf
                    <div class="row">               {{-- row = 1 --}}
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Driver</label>
                                <div class="col-sm-9">
                                    <select class="form-control" name="driver_id">
                                        @foreach($drivers as $driver)
                                            <option value="{{$driver->id}}">{{$driver->first_name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Make</label>
                                <div class="col-sm-9">
                                    <select class="form-control" name="make_id">
                                        @foreach($makes as $make)
                                            <option value="{{$make->id}}">{{$make->title}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">               {{-- row = 2 --}}
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Model</label>
                                <div class="col-sm-9">
                                    <select class="form-control" name="model_id">
                                        @foreach($models as $model)
                                            <option value="{{$model->id}}">{{$model->title}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Manufacture Year</label>
                                <div class="col-sm-9">
                                    <input type="date" name="manufacture_year" class="form-control">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">               {{-- row = 3 --}}
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">License Plate</label>
                                <div class="col-sm-9">
                                    <input type="text" name="license_plate" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Car Type</label>
                                <div class="col-sm-9">
                                    <select class="form-control" name="car_type">
                                        <option value="1">Economy</option>
                                        <option value="2">VIP</option>
                                        <option value="3">Van</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">               {{-- row = 4 --}}
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Color</label>
                                <div class="col-sm-9">
                                    <input type="text" name="color" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Technical Inspection</label>
                                <div class="col-sm-9">
                                    <input type="checkbox" name="technical_inspection" class="form-check-input"
                                           style="margin: 20px"
                                           value="1">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <button type="submit" class="btn btn-success mb-2" style="margin-top: 10px">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
