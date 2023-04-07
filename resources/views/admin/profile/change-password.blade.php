@extends('admin.parent')

@section('content')

<div class="card">
    <div class="card-body">
      <h5 class="card-title">Change Password</h5>

      <!-- Vertical Form -->
      <form class="row g-3" action="{{route('updatePassword')}}" method="POST">

        @method('PUT')
        @csrf
        
        <div class="col-12">
          <label for="inputPassword4" class="form-label">Current Password</label>
          <input type="password" class="form-control" id="inputPassword4" name="current_password">
        </div>
    
        <div class="col-12">
            <label for="inputPassword4" class="form-label">New Password</label>
            <input type="password" class="form-control" id="inputPassword4" name="password">
          </div>


          <div class="col-12">
            <label for="inputPassword4" class="form-label">Confirm Password</label>
            <input type="password" class="form-control" id="inputPassword4" name="comfirmation_password">
          </div>
        <div class="text-center">
          <button type="submit" class="btn btn-primary">Submit</button>
          <button type="reset" class="btn btn-secondary">Reset</button>
        </div>
      </form><!-- Vertical Form -->

    </div>
  </div>


@endsection