@extends('Dashboard.admin_dashboard')


@section('content')
<!-- page start-->

            <div class="container">
                        <div class="col-md-6">

                          <div class="card">
                            <div class="card-header text-center">
                              <h2>
                                  <i class="fa fa-plus-circle"></i>
                                  Add Purchase
                              </h2>
                              @if(Session::has('message'))
                              <p class="alert alert-success">{{Session::get('message')}}</p>
                              @endif
                            </div>
                            <div class="card-body">


                              <form  action="{{ route('create_purchase') }}" method="POST">


                                  @csrf
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Manufacturer</label>
                                        <input type="text" class="form-control" name="manufacturer" >
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Invoice No</label>
                                        <input type="text" class="form-control" name="invoice_no" >
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Payment</label>
                                        <input type="text" class="form-control" name="payment" >
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Item Information</label>
                                        <select class="form-control" name="medicine_id">
                                         <option value="">Select a item information</option>
                                    @foreach($medicines as $medicine)
                                         <option value="{{$medicine->id}}">{{$medicine->name}}</option>
                                    @endforeach
                                     </select>

                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Batch Id</label>
                                        <input type="text" class="form-control" name="batch_id" >
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Expire Date</label>
                                        <input type="date" class="form-control" name="expire_date" >
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Stock</label>
                                        <input type="text" class="form-control" name="stock" >
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Quantity</label>
                                        <input type="text" class="form-control" name="quantity" >
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Manufacturer Price</label>
                                        <input type="text" class="form-control" name="manufacturer_price" >
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Total</label>
                                        <input type="text" class="form-control" name="total" >
                                    </div>

                                    <button type="submit" class="btn btn-info"> Submit</button>
                                  </form>
                            </div>
                          </div>
                        </div>
            </div>
        <!-- page end-->
@endsection
