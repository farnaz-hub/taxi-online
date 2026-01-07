<div class="card">
    <div class="card-body">
        <input type="hidden" name="customer_id" value="{{$customer->id}}">
        <a href="{{route('address.add', ['customer' => $customer])}}" onclick="addAddress(this);return false"
           class="btn btn-secondary btn-sm mdi mdi-plus-circle"
           style="margin-bottom: 10px">ADD</a>
        <h4 class="card-title text-center">Address List</h4>
        <div class="table-responsive">
            <table class="table table-hover">
                <thead class="text-center">
                <tr class="table-dark">
                    <td>Title</td>
                    <td>Full Address</td>
                    <td>Postal Code</td>
                    <td>Unit</td>
                    <td>Operations</td>
                </tr>
                </thead>
                <tbody class="text-center">
                @foreach($customer->addresses as $address)
                    <tr>
                        <td>{{$address->title}}</td>
                        <td>{{$address->address}}</td>
                        <td>{{$address->postal_code}}</td>
                        <td>{{$address->unit}}</td>
                        <td>
                            <a href="{{route('address.show', ['address' => $address])}}"
                               onclick="showAddress(this);return false" class="btn btn-info btn-sm">Edit</a>
                            <a href="{{route('address.delete', ['address' => $address])}}"
                               onclick="deleteAddress(this);return false" class="btn btn-danger btn-sm">Delete</a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
<div class="modal" id="Modal">               {{-- Modal --}}
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
