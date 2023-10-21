@extends('backend.master')

@section('content')


<div>
<h1>Create a Role</h1>

@if(session()->has('msg'))
<p class="alert alert-success"> {{session()->get('msg')}}</p>
@endif
<a href="{{route('role.create.form')}}" class="btn btn-success">Create</a>

<table class="table">
        <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Name</th>
            <th> </th>
            <th scope="col">Role_Status</th>
        </tr>
        </thead>
        <tbody>


        @foreach($roles as $role)
        <tr>
            <th scope="row">{{$role->id}}</th>
            <td>{{$role->name}}</td>
            <td>{{$role->status}}</td>
            <td>
            <a class="btn btn-primary" href="{{route('assign')}}" role="button">Assign</a>
            <!-- <button class="btn btn-primary" type="submit">Button</button> -->
            <!-- <button href="{{route('assign')}}" type="button" class="btn btn-primary">Assign</button> -->
            </td>
        <ul>


        </ul>
      </td>
        </tr>
        @endforeach



        </tbody>
    </table>


</div>





@endsection
