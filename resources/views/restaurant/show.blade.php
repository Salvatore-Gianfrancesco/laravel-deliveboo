@extends('layouts.index')


@section('content')
    <div class="center d-flex justify-content-center">
        <div class="pt-5">
            <h1>{{ $restaurant->company_name }}</h1>
            <p class="lead">Description: {{ $restaurant->description }}</p>
            <p class="lead">Address: {{ $restaurant->address }}</p>
            <p class="lead">PIVA: {{ $restaurant->piva }}</p>
            <p class="lead">Min. Order: {{ $restaurant->min_order }}</p>
            <p class="lead">Closing time: {{ $restaurant->closing_time }}</p>

            <a class="btn btn-primary">Edit</a>
        </div>
    </div>
@endsection
