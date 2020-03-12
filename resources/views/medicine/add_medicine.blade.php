@extends('Dashboard.admin_dashboard')


@section('content')

<!-- page start-->


            <div class="container">
                        <div class="col-md-6">

                          <div class="card">
                            <div class="card-header text-center">
                              <h2>
                                  <i class="fa fa-plus-circle"></i>
                                  Add Medicine
                              </h2>
                              @if(Session::has('message'))
                              <p class="alert alert-success">{{Session::get('message')}}</p>
                              @endif
                            </div>
                            <div class="card-body">
                              <form  action="{{ route('create_medicine') }}" method="POST">
                                  @csrf
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Name</label>
                                        <input type="text" class="form-control" name="name" >
                                    </div>

                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Category</label>

                                           <select class="form-control" name="category">
                                            <option value="">Select a category</option>
                                            @foreach($categories as $category)
                                            <option value="{{$category->id}}">{{$category->name}}</option>
                                           @endforeach
                                        </select>

                                    </div>


                                    <div class="form-group">
                                        <label>Purchase Price</label>
                                        <input type="number"  min=0 class="form-control" name="purchase_price">
                                    </div>

                                    <div class="form-group">
                                        <label>Selling Price</label>
                                        <input type="number" min=0  class="form-control" name="selling_price">
                                  </div>

                                  <div class="form-group">
                                      <label>Quantity</label>
                                      <input type="number" min=0  class="form-control" name="quantity">
                                  </div>
                                  <div class="form-group">
                                      <label for="exampleInputEmail1">Medicine Shelf</label>
                                      <input type="text" class="form-control" name="medicine_shelf" >
                                  </div>
                                  <div class="form-group">
                                      <label>Generic Name</label>
                                      <input type="text" class="form-control" name="generic_name">
                                  </div>
                                  <div class="form-group">
                                      <label>Company</label>
                                      <input type="text" class="form-control" name="company">
                                  </div>
                                  <div class="form-group">
                                      <label>Effects</label>
                                      <input type="text" class="form-control" name="effects">
                                  </div>
                                  <div class="form-group">
                                      <label>Expire Date</label>
                                      <input type="date" class="form-control" name="expire_date">
                                  </div>

                                    <button type="submit" class="btn btn-info"> Submit</button>
                                  </form>
                            </div>
                          </div>
                        </div>
            </div>
        <!-- page end-->
@endsection
