@extends('layouts.index')

@section('content')
    <div class="container my-3 d-flex flex-column gap-3">
        <h1>{{ $plate->name }}</h1>

        <hr>

        @if ($plate->image)
            <img src="{{ asset('storage/' . $plate->image) }}" alt="{{ $plate->slug }}" width="300">
        @endif

        <p class="lead"><strong>Descrizione:</strong> {{ $plate->description ? $plate->description : 'NOT SET' }}</p>
        <div class="lead"><strong>Prezzo:</strong> {{ $plate->price ? "$plate->price €" : 'NOT SET' }}</div>
        <div class="lead"><strong>Visibilità:</strong> {{ $plate->visibility ? 'Si' : 'No' }}</div>
    </div>
@endsection
