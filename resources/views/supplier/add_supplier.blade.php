@extends('Dashboard.admin_dashboard')


@section('content')
<!-- page start-->

            <div class="container">
                        <div class="col-md-6">

                          <div class="card">
                            <div class="card-header text-center">
                              <h2>
                                  <i class="fa fa-plus-circle"></i>
                                  Add Supplier
                              </h2>
                              @if(Session::has('message'))
                              <p class="alert alert-success">{{Session::get('message')}}</p>
                              @endif



                              @if ($errors->any())
                                  <div class="alert alert-danger">
                                      <ul>
                                          @foreach ($errors->all() as $error)
                                              <li>{{ $error }}</li>
                                          @endforeach
                                      </ul>
                                  </div>
                              @endif




                            </div>
                            <div class="card-body">
                              <form  action="{{ route('create_supplier') }}" method="POST">
                                  @csrf
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Name</label>
                                        <input type="text" class="form-control" name="name" >
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Phone Number</label>
                                        <input type="phoneInput" class="form-control" placeholder="01......" maxlength="11"
                                         name="phone" required >
                                    </div>


                                    <div class="form-group">
                                        <label>Address</label>
                                        <input type="text" class="form-control" name="address">
                                    </div>

                                    <button type="submit" class="btn btn-info"> Submit</button>
                                  </form>
                            </div>
                          </div>
                        </div>
            </div>
        <!-- page end-->
@endsection
