@extends('Dashboard.admin_dashboard')

@section('content')

<div class="container">
  <div class="row">
    <div class="col-auto">

      <div class="card">
        <div class="card-header text-center">
          <h3>Supplier List </h3>
        </div>
        <div class="card-body">
          <table class="table table-striped">
            <thead class="table-danger">
              <tr>
                <th>Id</th>
                <th>Name</th>
                  <th>Phone</th>
                    <th>Address</th>
                    <th></th>
                  </tr>
            </thead>
            <tbody class="text-center">

              @foreach($suppliers as $supplier)
              <tr>
                <td>{{$supplier->id}}</td>
                <td>{{$supplier->name}}</td>
                <td>{{$supplier->phone}}</td>
                  <td>{{$supplier->address}}</td>
                  <td><a href="{{route('supplier.edit',$supplier->id)}}" class="btn btn-success">Update</a>
                  <a href="{{route('supplier.delete',$supplier->id)}}" class="btn btn-danger">Delete</a></td>


              </tr>
              @endforeach
            </tbody>
          </table>
        </div>

      </div>

    </div>


</div>

@endsection
