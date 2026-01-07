<div class="card">
    <div class="card-body">
        <input type="hidden" name="customer_id" value="{{$address->customer->id}}">
        <h4 class="card-title text-center" style="margin-bottom: 40px">Editing Address</h4>
        <form id="updateAddress" method="post" action="{{route('address.update', ['address' => $address])}}">
            @csrf
            <div class="col-md-12">
                <div class="form-group row">
                    <label class="col-form-label">Title</label>
                    <div class="col-sm-1">
                        <input type="text" name="title" class="form-control" placeholder="title"
                               value="{{$address->title}}">
                    </div>
                    <label class="col-form-label">Full Address</label>
                    <div class="col-sm-4">
                                    <textarea name="address" class="form-control"
                                              placeholder="enter your address">{{$address->address}}</textarea>
                    </div>
                    <label class="col-form-label">Postal Code</label>
                    <div class="col-sm-2">
                        <input type="text" name="postal_code" class="form-control" placeholder=". . ."
                               value="{{$address->postal_code}}">
                    </div>
                    <label class="col-form-label">Unit</label>
                    <div class="col-sm-1">
                        <input type="text" name="unit" class="form-control" placeholder=". . ."
                               value="{{$address->unit}}">
                    </div>
                    <div class="col-md-6">
                        <button type="submit" onclick="updateAddress(this);return false" class="btn btn-success mb-2"
                                style="margin-top: 30px">Submit
                        </button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
