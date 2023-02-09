@extends('layouts.index')

@section('content')
    <div class="container my-3">
        <h1>Modifica i dati del tuo ristorante</h1>

        <form action="{{ route('admin.restaurant.update', $restaurant->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            @include('partials.errors')

            {{-- company_name --}}
            <div class="mb-3">
                <label for="company_name" class="form-label">Nome Ristorante</label>
                <input type="text" name="company_name" id="company_name"
                    class="form-control @error('company_name') is-invalid @enderror"
                    value="{{ old('company_name', $restaurant->company_name) }}" required maxlength="100">
            </div>

            {{-- description --}}
            <div class="mb-3">
                <label for="description" class="form-label">Descrizione</label>
                <textarea class="form-control @error('description') is-invalid @enderror" name="description" id="description"
                    rows="2" maxlength="10000">{{ old('description', $restaurant->description) }}</textarea>
            </div>

            {{-- types --}}
            <div class="mb-3">
                <label for="types" class="form-label">Tipo di cucina</label>
                <select multiple class="form-select @error('types') is-invalid @enderror" name="types[]" id="types"
                    required>
                    <option value="" disabled>Seleziona una tipologia</option>

                    @forelse ($types as $type)
                        @if ($errors->any())
                            <option value="{{ $type->id }}"
                               {{ in_array($type->id, old('types', [])) ? 'selected' : '' }}>
                                {{ $type->name }}</option>
                        @else
                            <option value="{{ $type->id }}"
                               {{ $restaurant->types->contains($type->id) ? 'selected' : '' }}>
                                {{ $type->name }}</option>
                        @endif
                    @empty
                        <option value="" disabled>Nessun tipo registrato</option>
                    @endforelse
                </select>
            </div>

            {{-- address --}}
            <div class="mb-3">
                <label for="address" class="form-label @error('address') is-invalid @enderror">Indirizzo</label>
                <input type="text" name="address" id="address" class="form-control"
                    value="{{ old('address', $restaurant->address) }}" required maxlength="255">
            </div>

            {{-- piva --}}
            <div class="mb-3">
                <label for="piva" class="form-label @error('piva') is-invalid @enderror">P-IVA</label>
                <input type="text" name="piva" id="piva" class="form-control"
                    value="{{ old('piva', $restaurant->piva) }}" required minlength="11" maxlength="11">
            </div>

            {{-- image --}}
            <div class="mb-3 d-flex gap-3">
                @if ($restaurant->image)
                    <img src="{{ asset('storage/' . $restaurant->image) }}" alt="{{ $restaurant->slug }}" width="150"
                        class="img-fluid">
                @endif

                <div class="w-100">
                    <label for="image" class="form-label">Immagine</label>
                    <input type="file" name="image" id="image"
                        class="form-control @error('image') is-invalid @enderror">
                </div>
            </div>

            {{-- min_order --}}
            <div class="mb-3">
                <label for="min_order" class="form-label @error('min_order') is-invalid @enderror">Ordine minimo</label>
                <input type="number" step="0.01" name="min_order" id="min_order" class="form-control"
                    value="{{ old('min_order', $restaurant->min_order) }}" min="0" max="999">
            </div>

            {{-- delivery --}}
            <div class="mb-3">
                <label for="delivery" class="form-label @error('delivery') is-invalid @enderror">Tipo di consegna</label>
                <input type="text" name="delivery" id="delivery" class="form-control"
                    value="{{ old('delivery', $restaurant->delivery) }}" maxlength="255">
            </div>

            {{-- closing_time --}}
            <div class="mb-3">
                <label for="closing_time" class="form-label @error('closing_time') is-invalid @enderror">
                    Orario di chiusura
                </label>
                <input type="time" step="1" name="closing_time" id="closing_time" class="form-control"
                    value="{{ old('closing_time', $restaurant->closing_time) }}">
            </div>

            {{-- submit button --}}
            <button type="submit" class="btn btn_orange mt-3 mb-5">Aggiorna</button>
        </form>
    </div>
@endsection
