<div class="card">
    <div class="card-body">
        <input type="hidden" name="customer_id" value="{{$customer->id}}">
        <h4 class="card-title text-center" style="margin-bottom: 40px">Adding Address</h4>
        <form id="saveAddress" method="post" action="{{route('address.save', ['customer' => $customer])}}">
            @csrf
            <div class="col-md-12">
                <div class="form-group row">
                    <label class="col-form-label">Title</label>
                    <div class="col-sm-1">
                        <input type="text" name="title" class="form-control" placeholder="title">
                    </div>
                    <label class="col-form-label">Full Address</label>
                    <div class="col-sm-4">
                                    <textarea name="address" class="form-control"
                                              placeholder="enter your address"></textarea>
                    </div>
                    <label class="col-form-label">Postal Code</label>
                    <div class="col-sm-2">
                        <input type="text" name="postal_code" class="form-control" placeholder=". . .">
                    </div>
                    <label class="col-form-label">Unit</label>
                    <div class="col-sm-1">
                        <input type="text" name="unit" class="form-control" placeholder=". . .">
                    </div>
                    <div class="col-md-6">
                        <button type="submit" onclick="saveAddress(this);return false" class="btn btn-success mb-2"
                                style="margin-top: 30px">Submit
                        </button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
