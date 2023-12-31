@extends('layouts.app')

@section('content')

<div class="container px-5 py-5 d-flex flex-column justify-content-center align-items-center">
        <div class="row justify-content-center">
            <h5 class="text-center">Game One</h5>
        </div>
        <div class="row justify-content-center">
            <form action="{{url('one-store')}}" method="POST" class="text-center"> 
                @csrf
                <div class="row mb-3">
                    <label for="inputone_score" class="col-sm-4 col-form-label">Insert Score:</label>
                    <div class="col-sm-8">
                        <input type="text"  name="one_score" placeholder="" class="form-control">
                    </div>  
                </div>
                <button type="submit" class="btn btn-primary mb-3 fw-bold">Submit</button>
            <form>     
        </div>
</div>

@endsection
