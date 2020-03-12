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
                  <th>Payment </th>
                    <th>Batch Id</th>
                      <th>Expire Date  </th>
                       <th>Stock</th>
                        <th>Quantity</th>
                        <th>Manufacturer Price</th>
                         <th>Total </th>
              </tr>
            </thead>
            <tbody class="text-center">

              @foreach($purchases as $purchase)
              <tr>
                <td>{{$purchase->id}}</td>
                <td>{{$purchase->manufacturer}}</td>
                <td>{{$purchase->invoice_no}}</td>
                <td>{{$purchase->payment}}</td>
                  <td>{{$purchase->batch_id}}</td>
                      <td>{{$purchase->expire_date}}</td>
                        <td>{{$purchase->stock}}</td>
                          <td>{{$purchase->quantity}}</td>
                            <td>{{$purchase->manufacturer_price}}</td>
                              <td>{{$purchase->total}}</td>

              </tr>
              @endforeach
            </tbody>
          </table>
        </div>

      </div>

    </div>


</div>

@endsection
