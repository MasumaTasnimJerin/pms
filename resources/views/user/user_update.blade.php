@extends('Dashboard.admin_dashboard')

@section('content')

<div class="card uper">
  <div class="card-header">
    Assign Roles to {{$user->name}}
  </div>
  <div class="card-body">
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
    @endif
    <form method="POST" action="{{ route('update', $user) }}">
      @csrf

          <div class='form-check'>
            <input type="checkbox" name="role" value="admin" @if($user->role === 'admin') checked @endif>
            <leble>Admin</label>
          </div>
          <div class='form-check'>
            <input type="checkbox" name="role" value="pharmacist"  @if($user->role === 'pharmacist') checked @endif>
            <leble>Pharmacist</label>
          </div>


          <button type="submit" class="btn btn-primary">Update</button>
      </form>
  </div>
</div>

@endsection
