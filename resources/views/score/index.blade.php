@extends('layouts.app')


@section('content')

<!-- <div class="container">
    <div class="justify-content-center">
        {{ $code }} completed all games <br>
        score result: <br>
        game one: {{ $score_one }} <br>
        game two: {{ $score_two }} <br>
        game three: {{ $score_three }} <br>
        total score: {{ $total_score }}%
        

    </div> -->

    <div class="container d-flex justify-content-center">
        <div class="card p-3 text-center">
            <!-- {{ $code }}  -->
            <h5 class="card-title">completed all games</h5> 
            <div class="card-body">
                <p class="card-text">Score Result:</p>
                <p class="card-text">Game One: {{ $score_one }}</p>
                <p class="card-text">Game Two: {{ $score_two }}</p>
                <p class="card-text">Game Three: {{ $score_three }}</p>
                <p class="card-text fw-bold fs-4">Total Score: {{ $total_score }}%</p>
            </div>
        </div>
    </div>
    <!--<div class="row">
        <div class="col-md-3">
            @if($score_one != null)
            <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike" checked disabled>
            <label for="vehicle1">Game 1</label><br>
            @else
            <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike" disabled>
            <label for="vehicle1">Game 1</label><br>
            @endif
        </div>
        <div class="col-md-3">
            @if($score_two != null)
            <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike" checked disabled>
            <label for="vehicle1">Game 2</label><br>
            @else
            <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike" disabled>
            <label for="vehicle1">Game 2</label><br>
            @endif
        </div>
        <div class="col-md-3">
            @if($score_three != null)
            <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike" checked disabled>
            <label for="vehicle1">Game 3</label><br>
            @else
            <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike" disabled>
            <label for="vehicle1">Game 3</label><br>
            @endif
        </div>
    </div>-->

     
    
    <div class="mb-3 d-md-flex justify-content-center py-4">
         <button onclick="window.location='{{ route('home') }}'" class="btn btn-primary mb-3 ">start again</button>
    </div>
</div>

@endsection