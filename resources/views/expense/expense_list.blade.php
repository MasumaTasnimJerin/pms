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
          <h3>Medicine list </h3>
        </div>
        <div class="card-body">
          <table class="table table-striped">
            <thead class="table-danger">
              <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Category</th>
                <th>Purchase Price</th>
                <th>Selling Price</th>
                <th>Quantity</th>
                <th>Medicine Shelf</th>
                <th>Generic Name</th>
                <th>Company</th>
                <th>Effects</th>
                <th>Expire Date</th>
                <th></th>
                </tr>
            </thead>
            <tbody class="text-center">

              @foreach($medicines as $medicine)

              <tr>
                <td>{{$medicine->id}}</td>
                <td>{{$medicine->name}}</td>
                <td>{{$medicine->categoryTable->name ?? ''}}</td>
                <td>{{$medicine->purchase_price}}</td>
                <td>{{$medicine->selling_price}}</td>
                <td>{{$medicine->quantity}}</td>
                <td>{{$medicine->medicine_shelf}}</td>
                <td>{{$medicine->generic_name}}</td>
                <td>{{$medicine->company}}</td>
                <td>{{$medicine->effects}}</td>
                <td>{{$medicine->expire_date}}</td>
                <td><a href="{{route('medicine.edit',$medicine->id)}}" class="btn btn-success">Update</a>
                <a href="{{route('medicine.delete',$medicine->id)}}" class="btn btn-danger">Delete</a></td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>

      </div>

    </div>


</div>

@endsection