@extends('Dashboard.admin_dashboard')


@section('content')
<!-- page start-->

            <div class="container">
                        <div class="col-md-6">

                          <div class="card">
                            <div class="card-header text-center">
                              <h2>
                                  <i class="fa fa-plus-circle"></i>
                                  Update Supplier
                              </h2>
                              @if(Session::has('message'))
                              <p class="alert alert-success">{{Session::get('message')}}</p>
                              @endif
                            </div>
                            <div class="card-body">
                              <form  action="{{ route('supplier.update',$supplier->id) }}" method="POST">
                                  @csrf
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Name</label>
                                        <input type="text" class="form-control" name="name" value="{{$supplier->name}}" >
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Phone Number</label>
                                        <input type="phoneInput" class="form-control" maxlength="11"
                                         name="phone" value="{{$supplier->phone}}" required >
                                    </div>


                                    <div class="form-group">
                                        <label>Address</label>
                                        <input type="text" class="form-control" name="address" value="{{$supplier->address}}">
                                    </div>

                                    <button type="submit" class="btn btn-info"> Submit</button>
                                  </form>
                            </div>
                          </div>
                        </div>
            </div>
        <!-- page end-->
@endsection
