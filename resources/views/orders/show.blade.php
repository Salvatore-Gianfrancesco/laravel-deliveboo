@extends('layouts.index')

@section('content')
    <div class="container my-3">
        <div class="d-flex flex-column gap-3">
            <h1>Ordine {{ $order->id }}</h1>

            {{-- client_firstname --}}
            <div class="lead">
                <strong>Nome</strong>:
                {{ $order->client_firstname }}
            </div>

            {{-- client_lastname --}}
            <div class="lead">
                <strong>Cognome</strong>:
                {{ $order->client_lastname }}
            </div>

            {{-- client_address --}}
            <div class="lead">
                <strong>Indirizzo</strong>:
                {{ $order->client_address }}
            </div>

            {{-- client_phone --}}
            <div class="lead">
                <strong>Numero di telefono</strong>:
                {{ $order->client_phone }}
            </div>

            <div class="lead">
                <strong>Articoli</strong>:
                @forelse ($order->plates as $plate )
                <ul>
                    <li>
                        {{ $plate->name }} x1
                    </li>
                </ul>
                    @empty

                    @endforelse
            </div>
            {{-- items --}}


            {{-- total_amount --}}
            <div class="lead">
                <strong>Prezzo</strong>:
                {{ $order->total_amount }} €
            </div>

            {{-- delivery_time --}}
            <div class="lead">
                <strong>Orario di consegna</strong>:
                {{ $order->delivery_time }}
            </div>

            {{-- is_delivered --}}
            <div class="lead">
                <strong>Consegnato</strong>:
                {{ $order->is_delivered ? 'Si' : 'No' }}
            </div>
        </div>
    </div>
    </div>
@endsection
