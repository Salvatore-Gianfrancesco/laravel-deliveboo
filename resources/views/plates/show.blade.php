@extends('layouts.index')

@section('content')
    <h1>{{ $plate->name }}</h1>
    <hr>
    <span><strong>Slug:</strong> {{ $plate->slug }}</span>
    {{-- <img src="{{asset('storage/' . $plate->cover_image)}}" alt=""> --}}
    <p><strong>Description:</strong> {{ $plate->description }}</p>
    <span><strong>Price:</strong> {{ $plate->price }}</span>
    <span><strong>Availability:</strong> {{ $plate->visibility }}</span>
@endsection
