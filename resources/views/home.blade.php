@extends('layouts.app')

@section('content')

<div class="container px-5 py-5 d-flex flex-column justify-content-center align-items-center">
  <div class="row justify-content-center">
    <h5 class="text-center">Register Name & Phone</h5>
  </div>
  <div class="row justify-content-center">
    <form action="{{url('player-store')}}" method="POST" class="text-center">
      @csrf
      <div class="mb-3 row">
        <label for="inputname" class="col-sm-2 col-form-label">Name:</label>
        <div class="col-sm-10">
          <input type="text" name="name" class="form-control" required>
        </div>
      </div>
      <div class="mb-3 row">
        <label for="inputphone" class="col-sm-2 col-form-label">Phone:</label>
        <div class="col-sm-10">
          <input type="tel" id="phone" name="phone" class="form-control" required>
        </div>
      </div>
      <button type="submit" class="btn btn-primary mb-3">Submit</button>
    </form>
  </div>
</div>


<div class="mb-3 d-md-flex justify-content-center">
    <button type="button" class="btn btn-primary mb-3"  onclick="window.location='{{ url('/api/get_data/create') }}'" >Data Report</button>
</div>
<div class="mb-3 d-md-flex justify-content-center">
    <button type="button" class="btn btn-primary mb-3"  onclick="window.location='{{ url('/api/get_data/show') }}'" >Count Report</button>
</div>  




@endsection