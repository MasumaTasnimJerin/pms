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
          <h3>Stock list </h3>
        </div>
        <div class="card-body">
          <table class="table table-striped">
            <thead class="table-danger">
              <tr>
                <th>#</th>
                <th>Medicine Name</th>
                <th>Quantity</th>

                </tr>
            </thead>
            <tbody class="text-center">

              @foreach($medicines as $key=>$medicine)
              @php
          $purchases = $medicine->purchase;
            $quantity = [];
            foreach($purchases as $purchase){
              $quantity[] = $purchase->quantity;
            }
            $totalQuantity = array_sum($quantity);
              @endphp

              <tr>
                <td>{{$key+1}}</td>
                <td>{{$medicine->name}}</td>
                <td>{{$totalQuantity}}</td>


              @endforeach
            </tbody>
          </table>
        </div>

      </div>

    </div>


</div>

@endsection
