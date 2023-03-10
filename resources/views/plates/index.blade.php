@extends('layouts.index')

@section('content')
    <div class="container my-3">
        <div class="d-flex justify-content-between align-items-start mb-3">
            <h1>Piatti</h1>
            <div>
                <a class="btn btn_orange" href="{{ route('admin.plates.create') }}">Aggiungi un nuovo Piatto</a>
            </div>
        </div>

        @include('partials.message')

        <div class="row plates">
            @forelse($plates as $plate)
                <div class="col-sm-6 col-lg-4 g-4">
                    <div class="card p-3">
                        <div class="image d-flex justify-content-center">
                            @if ($plate->image)
                                <img class="img-fluid" src="{{ asset('storage/' . $plate->image) }}"
                                    alt="{{ $plate->slug }}">
                            @else
                                <img class="img-fluid" src="https://via.placeholder.com/600x300.png?text=Image"
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
                        <!-- price -->

                        <div class="action_buttons mt-2">
                            <div class="buttons d-flex justify-content-center align-items-center h-100">
                                <a class="btn btn-small" href="{{ route('admin.plates.show', $plate->id) }}">
                                    <i class="fas fa-eye fa-sm fa-fw"></i>
                                </a>
                                <!-- show -->

                                <a class="btn btn-small" href="{{ route('admin.plates.edit', $plate->id) }}">
                                    <i class="fas fa-pencil fa-sm fa-fw"></i>
                                </a>
                                <!-- edit -->

                                <button type="button" class="btn btn-small" data-bs-toggle="modal"
                                    data-bs-target="#deleteplate-{{ $plate->id }}">
                                    <i class="fa fa-trash fa-sm fa-fw"></i>
                                </button>
                                <!-- delete -->

                            </div>

                        </div>
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
                                        Sei sicuro di voler eliminare questo piatto? Attenzione: l'azione ??
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
                        <!-- buttons -->
                    </div>
                </div>
                <!-- col -->
            @empty
                <p>
                    No Plates Avilable
                </p>
            @endforelse

            @if ($plates->lastPage() !== 1)
                <div class="plates_pagination d-flex gap-1 mt-3">
                    {{-- first page --}}
                    <a href="http://127.0.0.1:8000/admin/plates?page=1"
                        class="btn btn_orange {{ $plates->currentPage() === 1 ? 'disabled' : '' }}">
                        <i class="fa-solid fa-backward-fast"></i>
                        <span>Prima pagina</span>
                    </a>

                    {{-- pages (max 3) --}}
                    <div>
                        @if ($plates->lastPage() <= 3)
                            @for ($i = 1; $i <= $plates->lastPage(); $i++)
                                <a href="http://127.0.0.1:8000/admin/plates?page={{ $i }}"
                                    class="btn btn_orange px_4 {{ $plates->currentPage() === $i ? 'disabled' : '' }}">{{ $i }}</a>
                            @endfor
                        @else
                            @for ($i = 1; $i <= 3; $i++)
                                <a href="http://127.0.0.1:8000/admin/plates?page={{ $i }}"
                                    class="btn btn_orange px_4 {{ $plates->currentPage() === $i ? 'disabled' : '' }}">{{ $i }}</a>
                            @endfor
                        @endif
                    </div>

                    {{-- last page --}}
                    <a href="http://127.0.0.1:8000/admin/plates?page={{ $plates->lastPage() }}"
                        class="btn btn_orange {{ $plates->currentPage() === $plates->lastPage() ? 'disabled' : '' }}">
                        <i class="fa-solid fa-forward-fast"></i>
                        <span>Ultima pagina</span>
                    </a>
                </div>
            @endif
        </div>
    </div>
@endsection
