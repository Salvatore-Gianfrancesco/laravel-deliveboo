@extends('layouts.index')

@section('content')
    <div class="container my-3">
        <h1 class="mb-3">Modifica Ordine {{ $order->id }}</h1>

        @include('partials.errors')

        <form action="{{ route('admin.orders.update', $order->id) }}" method="post">
            @csrf
            @method('PUT')

            {{-- client_firstname --}}
            {{-- <div class="mb-3">
                <label for="client_firstname" class="form-label">Nome</label>
                <input type="text" name="client_firstname" id="client_firstname"
                    class="form-control @error('client_firstname') is-invalid @enderror"
                    value="{{ old('client_firstname', $order->client_firstname) }}" required maxlength="100">
            </div> --}}

            {{-- client_lastname --}}
            {{-- <div class="mb-3">
                <label for="client_lastname" class="form-label">Cognome</label>
                <input type="text" name="client_lastname" id="client_lastname"
                    class="form-control @error('client_lastname') is-invalid @enderror"
                    value="{{ old('client_lastname', $order->client_lastname) }}" required maxlength="100">
            </div> --}}

            {{-- client_address --}}
            {{-- <div class="mb-3">
                <label for="client_address" class="form-label">Indirizzo</label>
                <input type="text" name="client_address" id="client_address"
                    class="form-control @error('client_address') is-invalid @enderror"
                    value="{{ old('client_address', $order->client_address) }}" required maxlength="255">
            </div> --}}

            {{-- client_phone --}}
            {{-- <div class="mb-3">
                <label for="client_phone" class="form-label">Numero di telefono</label>
                <input type="text" name="client_phone" id="client_phone"
                    class="form-control @error('client_phone') is-invalid @enderror"
                    value="{{ old('client_phone', $order->client_phone) }}" required maxlength="20">
            </div> --}}

            {{-- total_amount --}}
            {{-- <div class="mb-3">
                <label for="total_amount" class="form-label">Prezzo</label>
                <input type="number" step="0.01" name="total_amount" id="total_amount"
                    class="form-control @error('total_amount') is-invalid @enderror"
                    value="{{ old('total_amount', $order->total_amount) }}" required min="0">
            </div> --}}

            {{-- delivery_time --}}
            {{-- <div class="mb-3">
                <label for="delivery_time" class="form-label">Orario di consegna</label>
                <input type="time" step="1" name="delivery_time" id="delivery_time"
                    class="form-control @error('delivery_time') is-invalid @enderror"
                    value="{{ old('delivery_time', $order->delivery_time) }}" required>
            </div> --}}

            {{-- is_delivered --}}
            <div class="form-check form-switch mb-3">
                <input class="form-check-input @error('is_delivered') is-invalid @enderror" type="checkbox" role="switch"
                    name="is_delivered" id="is_delivered" {{ old('is_delivered', $order->is_delivered) ? 'checked' : '' }}>
                <label class="form-check-label" for="is_delivered">
                    Consegnato?
                </label>
            </div>

            {{-- submit button --}}
            <button type="submit" class="btn btn_orange">Modifica</button>
        </form>
    </div>
@endsection
