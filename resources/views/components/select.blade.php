<div class="col-md-6">
    <div class="form-group row">
        <label class="col-sm-3 col-form-label">{{$label}}</label>
        <div class="col-sm-9">
            <select class="form-control" name="{{$name}}">
                @foreach($values as $key => $value)
                    <option value="{{$key}}">{{$value}}</option>
                @endforeach
            </select>
        </div>
    </div>
</div>
