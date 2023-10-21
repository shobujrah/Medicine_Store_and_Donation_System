
@extends('backend.master')


@section('content')
<div>
<h1>Role Create Form</h1>

<form action="{{route('role.store.form')}}" method="post" >

       @csrf
        <div class="form-group">
            <label for="">Name <span style="color:red">*</span></label>
            <input required name="name" type="text" class="form-control" id="" placeholder="Enter name">
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
</form>

</div>
@endsection
