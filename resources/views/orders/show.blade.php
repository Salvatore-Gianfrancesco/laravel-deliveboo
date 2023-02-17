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

                <div class="table-responsive fs-5">
                    <table class="table table-light">
                        <thead>
                            <tr>
                                <th scope="col">Piatto</th>
                                <th scope="col">Quantità</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($order->plates as $plate)
                                <tr>
                                    <td scope="row">{{ $plate->name }}</td>
                                    <td>{{ $plate->pivot->quantity }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

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
                {{ substr($order->delivery_time, 0, 5) }}
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
