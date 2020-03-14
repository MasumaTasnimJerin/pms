@extends('Dashboard.admin_dashboard')


@section('content')

<!-- page start-->


            <div class="container">
                        <div class="col-md-6">

                          <div class="card">
                            <div class="card-header text-center">
                              <h2>
                                  <i class="fa fa-plus-circle"></i>
                                  Update Role
                              </h2>
                              @if(Session::has('message'))
                              <p class="alert alert-success">{{Session::get('message')}}</p>
                              @endif
                            </div>

                            <div class="card-body">
                              <form  action="{{ route('role.update',$role->id) }}" method="POST">
                                  @csrf
                                  <div class="form-group">
                                      <label for="exampleInputEmail1">Name</label>
                                      <input type="text" class="form-control" name="name" value="{{$role->name}}" >
                                  </div>
                                  <div class="form-group">
                                      <label for="exampleInputEmail1">Description</label>
                                      <input type="text" class="form-control" name="description" value="{{$role->description}}" >
                                  </div>



                                    <button type="submit" class="btn btn-info"> Update</button>
                                  </form>
                            </div>
                          </div>
                        </div>
            </div>
        <!-- page end-->
@endsection
