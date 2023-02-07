@extends('layouts.index')

@section('content')
    <div class="container my-3">
        <h1 class="mb-3">Aggiungi un nuovo Piatto</h1>

        @include('partials.errors')

        <form action="{{ route('admin.plates.store') }}" method="post" enctype="multipart/form-data">
            @csrf

            {{-- name --}}
            <div class="mb-3">
                <label for="name" class="form-label">Nome</label>
                <input type="text" name="name" id="name" class="form-control @error('name') is-invalid @enderror"
                    value="{{ old('name') }}" required maxlength="100">
            </div>

            {{-- description --}}
            <div class="mb-3">
                <label for="description" class="form-label">Descrizione / Ingredienti</label>
                <textarea name="description" id="description" class="form-control @error('description') is-invalid @enderror"
                    maxlength="10000">{{ old('description') }}</textarea>
            </div>

            {{-- price --}}
            <div class="mb-3">
                <label for="price" class="form-label">Prezzo</label>
                <input type="number" step="0.01" name="price" id="price"
                    class="form-control @error('price') is-invalid @enderror" value="{{ old('price') }}" min="0">
            </div>

            {{-- image --}}
            <div class="mb-3">
                <label for="image" class="form-label">Immagine</label>
                <input type="file" name="image" id="image"
                    class="form-control @error('image') is-invalid @enderror">
            </div>

            {{-- visibility --}}
            <div class="form-check form-switch mb-3">
                <input class="form-check-input @error('visibility') is-invalid @enderror" type="checkbox" role="switch"
                    name="visibility" id="visibility" {{ old('visibility') ? 'checked' : '' }}>
                <label class="form-check-label" for="visibility">
                    Visibile?
                </label>
            </div>

            {{-- submit button --}}
            <button type="submit" class="btn btn-primary">Salva</button>
        </form>
    </div>
@endsection
