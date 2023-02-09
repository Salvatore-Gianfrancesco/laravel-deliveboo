
@extends('layouts.index')

@section('content')
<div class="container d-flex flex-column gap-3 my-3">
    <div class="data-info d-flex justify-content-between align-items-start">
        {{-- company_name --}}
        <h1>{{ $restaurant->company_name }}</h1>

        {{-- edit route button --}}
        <div>
            <a class="btn btn_orange" href="{{ route('admin.restaurant.edit', $restaurant->id) }}">
                <span>
                    Modifica i dati
                </span> 

                <i class="fa-solid fa-pen-to-square"></i>

            </a>
        </div>
    </div>

    {{-- image --}}
    @if ($restaurant->image)
        <img src="{{ asset('storage/' . $restaurant->image) }}" alt="{{ $restaurant->slug }}" width="500">
    @endif

    {{-- description --}}
    <div class="lead">
        <strong>Descrizione</strong>:
        {{ $restaurant->description ? $restaurant->description : 'NOT SET' }}
    </div>

    {{-- types --}}
    <div class="lead">
        <strong>Tipi di cucina</strong>:
        @if (count($restaurant->types) > 0)
            @foreach ($restaurant->types as $type)
                <span>{{ $type->name }} </span>
            @endforeach
        @else
            <span>No type</span>
        @endif
    </div>

    {{-- address --}}
    <div class="lead">
        <strong>Indirizzo</strong>:
        {{ $restaurant->address ? $restaurant->address : 'NOT SET' }}
    </div>

    {{-- piva --}}
    <div class="lead">
        <strong>P-IVA</strong>:
        {{ $restaurant->piva ? $restaurant->piva : 'NOT SET' }}
    </div>

    {{-- min_order --}}
    <div class="lead">
        <strong>Ordine minimo</strong>:
        {{ $restaurant->min_order ? $restaurant->min_order : 'NOT SET' }} €
    </div>

    {{-- delivery --}}
    <div class="lead">
        <strong>Tipo di consegna</strong>:
        {{ $restaurant->delivery ? $restaurant->delivery : 'NOT SET' }}
    </div>

    {{-- closing_time --}}
    <div class="lead">
        <strong>Orario di chiusura</strong>:
        {{ $restaurant->closing_time ? $restaurant->closing_time : 'NOT SET' }}
    </div>
</div>
@endsection