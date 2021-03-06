@extends('Dashboard.admin_dashboard')

@section('content')

<div class="container">
  <div class="row">
    <div class="col-auto">

      <div class="card">
        <div class="card-header text-center">
          <h3>Role List </h3>
        </div>
        <div class="card-body">
          <table class="table table-striped">
            <thead class="table-danger">
              <tr>
                <th>Name</th>
                <th>Description</th>
                <th></th>
              </tr>
            </thead>
            <tbody class="text-center">

              @foreach($roles as $role)
              <tr>
                <td>{{$role->name}}</td>
                <td>{{$role->description}}</td>
                <td><a href="{{route('role.edit',$role->id)}}" class="btn btn-primary">Update</a>
                <a href="{{route('role.delete',$role->id)}}" class="btn btn-danger">Delete</a></td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>

      </div>

    </div>


</div>

@endsection
