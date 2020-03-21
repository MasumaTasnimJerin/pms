@extends('Dashboard.admin_dashboard')

@section('content')

<div class="container">
  @if(Session::has('message'))
  <p class="alert alert-success">{{Session::get('message')}}</p>
  @endif
  <div class="row">
    <div class="col-auto">

      <div class="card">
        <div class="card-header text-center">
          <h3>Medicine Category </h3>
        </div>
        <div class="card-body">
          <table class="table table-striped">
            <thead class="table-danger ">
              <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Description</th>
                <th></th>
              </tr>
            </thead>
            <tbody class="text-center">

              @foreach($categories as $category)
              <tr>
                <td>{{$category->id}}</td>
                <td>{{$category->name}}</td>
                <td>{{$category->description}}</td>
                <td><a href="{{route('category.edit',$category->id)}}" class="btn btn-success">Update</a>
                <a href="{{route('category.delete',$category->id)}}" class="btn btn-danger">Delete</a></td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>

      </div>

    </div>


</div>

@endsection
