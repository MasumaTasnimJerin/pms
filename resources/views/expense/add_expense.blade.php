@extends('Dashboard.pharmacist_dashboard')


@section('content')
<!-- page start-->

            <div class="container">
                        <div class="col-md-6">

                          <div class="card">
                            <div class="card-header text-center">
                              <h2>
                                  <i class="fa fa-plus-circle"></i>
                                  Add Expense
                              </h2>
                              @if(Session::has('message'))
                              <p class="alert alert-success">{{Session::get('message')}}</p>
                              @endif
                            </div>
                            <div class="card-body">


                              <form  action="{{route('create_expense')}}" method="POST">


                                  @csrf
                                    <div class="form-group">
                                        <label for="exampleInputEmail1"> Expense</label>
                                        <input type="text" class="form-control" name="expense" >
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Amount</label>
                                        <input type="text" class="form-control" name="amount" >
                                    </div>

                                    <button type="submit" class="btn btn-info"> Submit</button>
                                  </form>
                            </div>
                          </div>
                        </div>
            </div>
        <!-- page end-->
@endsection
