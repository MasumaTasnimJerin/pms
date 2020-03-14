@extends('Dashboard.admin_dashboard')

@section('content')

<div class="container">
  <div class="row">
    <div class="col-auto">

      <div class="card">
        <div class="card-header text-center">
          <h3>User List </h3>
        </div>
        <div class="card-body">
          <table class="table table-striped">
            <thead class="bg-info text-center">
              <tr>
                <th>Id</th>
                <th>Name</th>
                <th></th>
              </tr>
            </thead>
            <tbody class="text-center">

              @foreach($users as $user)
              <tr>
                <td>{{$user->id}}</td>
                <td>{{$user->name}}</td>
                <td><button type="submit" class="btn btn-info"> Assign Role</button></td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>

      </div>

    </div>


</div>

@endsection
