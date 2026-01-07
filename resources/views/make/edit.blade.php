@extends('layout.dashboard')
@section('content')
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title text-center" style="margin-bottom: 40px">Adding Make</h4>
                <form method="post" action="{{route('make.update', ['make' => $make])}}">
                    @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Title</label>
                                <div class="col-sm-9">
                                    <input type="text" name="title" class="form-control" value="{{$make->title}}">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                                <button type="submit" class="btn btn-success mb-2"
                                        style="margin-left: 70px; margin-top: 5px">Submit
                                </button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
