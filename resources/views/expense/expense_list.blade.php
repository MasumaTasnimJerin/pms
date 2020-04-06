@extends('Dashboard.pharmacist_dashboard')

@section('content')

<div class="container">
  @if(Session::has('message'))
  <p class="alert alert-success">{{Session::get('message')}}</p>
  @endif
  <div class="row">
    <div class="col-auto">

      <div class="card">
        <div class="card-header text-center">
          <h3>Expense List </h3>
        </div>
        <div class="card-body">
          <table class="table table-striped">
            <thead class="table-danger">
              <tr>
                <th>Id</th>
                <th>Name</th>
                  <th>Amount</th>
                    <th></th>
                  </tr>
            </thead>
            <tbody class="text-center">

              @foreach($expenses as $expense)
              <tr>
                <td>{{$expense->id}}</td>
                <td>{{$expense->name}}</td>
                <td>{{$expense->amount}}</td>
                  <td><a href="{{route('expense.edit',$expense->id)}}" class="btn btn-primary">Update</a>
                  <a href="{{route('expense.delete',$expense->id)}}" class="btn btn-danger">Delete</a></td>


              </tr>
              @endforeach
            </tbody>
          </table>
        </div>

      </div>

    </div>


</div>

@endsection
