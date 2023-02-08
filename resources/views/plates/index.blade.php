@extends('layouts.index')

@section('content')
    <div class="container my-3">
        <div class="d-flex justify-content-between align-items-start mb-3">
            <h1>Piatti</h1>
            <div>
                <a class="btn btn-primary" href="{{ route('admin.plates.create') }}">Aggiungi un nuovo Piatto</a>
            </div>
        </div>

        @include('partials.message')

        {{-- <div class="table-responsive">
            <table class="table table-primary">
                <thead>
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Immagine</th>
                        <th scope="col">Nome</th>
                        <th scope="col">Prezzo</th>
                        <th scope="col">Azioni</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($plates as $plate)
                        <tr>
                            <td scope="row">{{ $plate->id }}</td>
                            <td>
                                @if ($plate->image)
                                    <img src="{{ asset('storage/' . $plate->image) }}" alt="{{ $plate->slug }}"
                                        width="100">
                                @else
                                    <img src="https://via.placeholder.com/600x300.png?text=Image" alt="placeholder"
                                        width="100">
                                @endif
                            </td>
                            <td>{{ $plate->name }}</td>
                            <td>{{ $plate->price }}</td>
                            <td>
                                <div class="d-flex gap-2">
                                    <div>
                                        <a class="btn btn-primary" href="{{ route('admin.plates.show', $plate->id) }}">
                                            <i class="fas fa-eye fa-sm fa-fw"></i>
                                            <span>Visualizza</span>
                                        </a>
                                    </div>

                                    <div>
                                        <a class="btn btn-secondary" href="{{ route('admin.plates.edit', $plate->id) }}">
                                            <i class="fas fa-pencil fa-sm fa-fw"></i>
                                            <span>Modifica</span>
                                        </a>
                                    </div>

                                    <!-- Modal trigger button -->
                                    <button type="button" class="btn btn-danger" data-bs-toggle="modal"
                                        data-bs-target="#deleteplate-{{ $plate->id }}">
                                        <i class="fa fa-trash fa-sm fa-fw"></i>
                                        <span>Elimina</span>
                                    </button>

                                    <!-- Modal Body -->
                                    <div class="modal fade" id="deleteplate-{{ $plate->id }}" tabindex="-1"
                                        data-bs-backdrop="static" data-bs-keyboard="false" role="dialog"
                                        aria-labelledby="modalplateId-{{ $plate->id }}" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-sm"
                                            role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title text-dark"
                                                        id="modalplateId-{{ $plate->id }}">Eliminazione piatto</h5>
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
                                                    <form action="{{ route('admin.plates.destroy', $plate->id) }}"
                                                        method="post">
                                                        @csrf
                                                        @method('DELETE')

                                                        <button type="submit" class="btn btn-danger">Elimina</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td scope="row">Nessun piatto registrato</td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div> --}}

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
                            <p>
                                {{ $plate->description }}
                            </p>
                            <!-- description -->
                        </div>

                        <h4 class="text-center">
                            <strong class="numb">{{ $plate->price }}&euro;</strong>
                        </h4>
                        <div class="button d-flex align-self-baseline">
                            <a class="btn btn-soft" href="#">+</a>
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
