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
                <th>Selling Price</th>
                <th>Quantity</th>
                <th>Company</th>
                <th>Expire Date</th>
                <th></th>
                </tr>
            </thead>
            <tbody class="text-center">

              @foreach($medicines as $medicine)
              @php
          $purchases = $medicine->purchase;
            $quantity = [];
            foreach($purchases as $purchase){
              $quantity[] = $purchase->quantity;
            }
            $totalQuantity = array_sum($quantity);
              @endphp
              <tr>
                <td>{{$medicine->id}}</td>
                <td>{{$medicine->name}}</td>
                <td>{{$medicine->categoryTable->name ?? ''}}</td>
                <td>{{$medicine->selling_price}}</td>
                <td>{{$totalQuantity}}</td>
                <td>{{$medicine->company}}</td>
                <td>{{date_format($medicine->expire_date,'Y-M-d')}}</td>
                <td><a href="{{route('medicine.edit',$medicine->id)}}" class="btn btn-primary">Update</a>
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
