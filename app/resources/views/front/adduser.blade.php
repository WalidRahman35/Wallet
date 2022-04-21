@extends('front.master')
@section('mainContent')
  <form>
     <div class="form-group">
    <label>name</label>
    <input type="text" class="form-control" name="username">

  </div>

  <div class="form-group">
    <label>Phone Number</label>
    <input type="tel" class="form-control" name="usernumber">
  </div>

  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection()