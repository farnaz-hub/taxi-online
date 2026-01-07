@extends('layout.dashboard')
@section('content')
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title text-center" style="margin-bottom: 40px">Adding Model</h4>
                <form method="post" action="{{route('model.update', ['model' => $model])}}">
                    @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Make</label>
                                <div class="col-sm-9">
                                    <select class="form-control" name="make_id">
                                        @foreach($makes as $make)
                                            <option value="{{$make->id}}" @if($make->id == $model->make_id) selected @endif>{{$make->title}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Model</label>
                                <div class="col-sm-9">
                                    <input type="text" name="title" class="form-control" value="{{$model->title}}">
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
