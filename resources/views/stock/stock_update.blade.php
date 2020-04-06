@extends('Dashboard.admin_dashboard')


@section('content')
<!-- page start-->

            <div class="container">
                        <div class="col-md-6">

                          <div class="card">
                            <div class="card-header text-center">
                              <h2>
                                  <i class="fa fa-plus-circle"></i>
                                  Update Stock
                              </h2>
                              @if(Session::has('message'))
                              <p class="alert alert-success">{{Session::get('message')}}</p>
                              @endif
                            </div>
                            <div class="card-body">
                              <form  action="{{ route('stock.update',$stock->id) }}" method="POST">
                                  @csrf
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Medicine Name</label>
                                        <input type="text" class="form-control" name="medicine_id" value="{{$stock->medicine_id}}" >
                                    </div>



                                    <div class="form-group">
                                        <label>Quantity</label>
                                        <input type="text" class="form-control" name="quantity" value="{{$stock->quantity}}">
                                    </div>

                                    <button type="submit" class="btn btn-info"> Submit</button>
                                  </form>
                            </div>
                          </div>
                        </div>
            </div>
        <!-- page end-->
@endsection
