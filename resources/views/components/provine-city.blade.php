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
