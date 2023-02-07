@extends('layouts.index')

@section('content')
    <div class="container my-3">
        <div class="d-flex justify-content-between align-items-start mb-3">
            <h1>Ordini</h1>
            <div>
                <a class="btn btn-primary" href="{{ route('admin.orders.create') }}">Aggiungi un nuovo Ordine</a>
            </div>
        </div>

        @include('partials.message')

        <div class="table-responsive">
            <table class="table table-primary">
                <thead>
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Nome</th>
                        <th scope="col">Cognome</th>
                        <th scope="col">Indirizzo</th>
                        <th scope="col">Telefono</th>
                        <th scope="col">Prezzo</th>
                        <th scope="col">Consegnato</th>
                        <th scope="col">Azioni</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($orders as $order)
                        <tr>
                            <td scope="row">{{ $order->id }}</td>
                            <td>{{ $order->client_firstname }}</td>
                            <td>{{ $order->client_lastname }}</td>
                            <td>{{ $order->client_address }}</td>
                            <td>{{ $order->client_phone }}</td>
                            <td>{{ $order->total_amount }}</td>
                            <td>{{ $order->is_delivered }}</td>
                            <td>
                                <div class="d-flex gap-2">
                                    <div>
                                        <a class="btn btn-primary" href="{{ route('admin.orders.show', $order->id) }}">
                                            <i class="fa-solid fa-eye"></i>
                                            <span>Visualizza</span>
                                        </a>
                                    </div>

                                    <div>
                                        <a class="btn btn-secondary" href="{{ route('admin.orders.edit', $order->id) }}">
                                            <i class="fa-solid fa-pen-to-square"></i>
                                            <span>Modifica</span>
                                        </a>
                                    </div>

                                    <!-- Modal trigger button -->
                                    <button type="button" class="btn btn-danger" data-bs-toggle="modal"
                                        data-bs-target="#deleteOrder-{{ $order->id }}">
                                        <i class="fa-solid fa-trash"></i>
                                        <span>Elimina</span>
                                    </button>

                                    <!-- Modal Body -->
                                    <div class="modal fade" id="deleteOrder-{{ $order->id }}" tabindex="-1"
                                        data-bs-backdrop="static" data-bs-keyboard="false" role="dialog"
                                        aria-labelledby="modalTitleId" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-sm"
                                            role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="modalTitleId-{{ $order->id }}">
                                                        Eliminazione Ordine</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    Sei sicuro di voler eliminare questo ordine? Attenzione: l'azione è
                                                    irreversibile!
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary"
                                                        data-bs-dismiss="modal">Annulla</button>
                                                    <form action="{{ route('admin.orders.destroy', $order->id) }}"
                                                        method="post">
                                                        @csrf
                                                        @method('DELETE')

                                                        <button type="submit" class="btn btn-danger">
                                                            Elimina
                                                        </button>
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
                            <td scope="row">Nessun ordine registrato</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
@endsection
