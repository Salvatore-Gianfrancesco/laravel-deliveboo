@extends('layouts.index')

@section('content')
    <div class="container my-3">
        <div class="d-flex justify-content-between align-items-start mb-3">
            <h1>Piatti</h1>
            <div>
                <a class="btn btn-soft" href="{{ route('admin.plates.create') }}">Aggiungi un nuovo Piatto</a>
            </div>
        </div>

        @include('partials.message')

        <div class="row food">
            @forelse($plates as $plate)
                <div class="col-lg-4 g-4">
                    <div class="card p-3">
                        <div class="image d-flex justify-content-center">
                            @if ($plate->image)
                                <img class="img-fluid icon" src="{{ asset('storage/' . $plate->image) }}"
                                    alt="{{ $plate->slug }}">
                            @else
                                <img class="img-fluid icon" src="https://via.placeholder.com/600x300.png?text=Image"
                                    alt="placeholder">
                            @endif
                        </div>
                        <!-- image -->
                        <div class="title text-center mt-4">
                            <h2>{{ $plate->name }}</h2>
                            <!-- name -->
                            <p class="text-muted">
                                {{ $plate->description }}
                            </p>
                            <!-- description -->
                        </div>

                        <h3 class="text-center">
                            <strong class="numb">{{ $plate->price }}&euro;</strong>
                        </h3>
                        <div class="buttons d-flex justify-content-center mt-2">
                            <a class="btn btn-small" href="{{ route('admin.plates.show', $plate->id) }}">
                                <i class="fas fa-eye fa-sm fa-fw"></i>
                            </a>
                            <a class="btn btn-small" href="{{ route('admin.plates.edit', $plate->id) }}">
                                <i class="fas fa-pencil fa-sm fa-fw"></i>
                            </a>
                            <button type="button" class="btn btn-small" data-bs-toggle="modal"
                                data-bs-target="#deleteplate-{{ $plate->id }}">
                                <i class="fa fa-trash fa-sm fa-fw"></i>
                            </button>
                            <div class="modal fade" id="deleteplate-{{ $plate->id }}" tabindex="-1"
                                data-bs-backdrop="static" data-bs-keyboard="false" role="dialog"
                                aria-labelledby="modalplateId-{{ $plate->id }}" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-sm"
                                    role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title text-dark" id="modalplateId-{{ $plate->id }}">
                                                Eliminazione piatto</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body text-dark">
                                            Sei sicuro di voler eliminare questo piatto? Attenzione: l'azione è
                                            irreversibile!
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                data-bs-dismiss="modal">Annulla</button>
                                            <form action="{{ route('admin.plates.destroy', $plate->id) }}" method="post">
                                                @csrf
                                                @method('DELETE')

                                                <button type="submit" class="btn btn-danger">Elimina</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- button -->
                    </div>
                </div>
                <!-- col -->
            @empty
                <p>
                    No Plates Avilable
                </p>
            @endforelse

        </div>
    </div>
@endsection
