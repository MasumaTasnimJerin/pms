@extends('Dashboard.admin_dashboard')

@section('content')

<div class="container">
  <div class="row">
    <div class="col-auto">

      <div class="card">
        <div class="card-header text-center">
          <h3>Medicine Category </h3>
        </div>
        <div class="card-body">
          <table class="table table-striped">
            <thead class="bg-info text-center">
              <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Description</th>
              </tr>
            </thead>
            <tbody class="text-center">

              @foreach($categories as $category)
              <tr>
                <td>{{$category->id}}</td>
                <td>{{$category->name}}</td>
                <td>{{$category->description}}</td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>

      </div>

    </div>


</div>

@endsection
