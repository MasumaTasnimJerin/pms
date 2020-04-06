@extends('Dashboard.admin_dashboard')

@section('content')

<div class="container">
  <div class="row">
    <div class="col-auto">

      <div class="card">
        <div class="card-header text-center">
          <h3>Manage Purchase </h3>
        </div>
        <div class="card-body">
          <table class="table table-striped">
            <thead class="bg-info text-center">
              <tr>
                <th>Id</th>
                <th>Manufacturer</th>
                <th>Invoice No</th>
                    <th>Batch Id</th>
                        <th>Quantity</th>
                        <th>Manufacturer Price</th>
              </tr>
            </thead>
            <tbody class="text-center">

              @foreach($purchases as $purchase)
              <tr>
                <td>{{$purchase->id}}</td>
                <td>{{$purchase->manufacturer}}</td>
                <td>{{$purchase->invoice_no}}</td>
                  <td>{{$purchase->batch_id}}</td>
                          <td>{{$purchase->quantity}}</td>
                            <td>{{$purchase->manufacturer_price}}</td>

              </tr>
              @endforeach
            </tbody>
          </table>
        </div>

      </div>

    </div>


</div>

@endsection
