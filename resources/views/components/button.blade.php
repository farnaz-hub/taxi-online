@if($editUrl && $deleteUrl)
    <td>
        <a href="{{$editUrl}}" class="btn btn-info btn-sm">Edit</a>
        <a href="{{$deleteUrl}}" class="btn btn-danger btn-sm">Delete</a>
    </td>
@endif

@if($submit)
    <div class="col-md-6">
        <button type="submit" class="btn btn-success mb-2" style="margin-top: 30px">Submit</button>
    </div>
@endif
