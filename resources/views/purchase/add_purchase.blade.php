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
                                        <label for="exampleInputEmail1">Select Medicine</label>
                                        <select class="form-control" name="medicine_id">
                                         <option value="">Select a Medicine</option>
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
                                        <label for="exampleInputEmail1">Quantity</label>
                                        <input type="text" class="form-control" name="quantity" >
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Manufacturer Price</label>
                                        <input type="text" class="form-control" name="manufacturer_price" >
                                    </div>


                                    <button type="submit" class="btn btn-info"> Submit</button>
                                  </form>
                            </div>
                          </div>
                        </div>
            </div>
        <!-- page end-->
@endsection
