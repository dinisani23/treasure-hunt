@extends('layouts.app')


@section('content')

<div class="container d-flex justify-content-center">
<table>
    <thead>
        <tr>
            <th>Code</th>
            <th>Name</th>
            <th>Total Score</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($players as $player)
        <tr>
            <td>{{ $player->code }}</td>
            <td>{{ $player->name }}</td>
            <td>{{ $player->total_score }}</td>
        </tr>
        @endforeach
    </tbody>
</table>
</div>
@endsection