@extends('layouts.index')

@section('content')
    <div class="container my-3">
        <div class="d-flex justify-content-between align-items-start mb-3">
            <h1>Ordini</h1>
            <div>
                <a class="btn btn-soft" href="{{ route('admin.orders.create') }}">Aggiungi un nuovo Ordine</a>
            </div>
        </div>

        @include('partials.message')

        {{-- <div class="table-responsive">
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
        </div> --}}
        <div class="row orders">
            @forelse($orders as $order)
                <div class="col-lg-4 col-sm-2 g-4">
                    <div class="card p-3 d-flex flex-column align-items-center justify-content-between">
                        <div class="order_number text-center">
                            <h5>Order #{{ $order->id }}</h5>
                            <!-- title -->
                            {{-- <span>Feb 1 2023, 18:31 PM</span> --}}
                        </div>
                        <hr class="w-100">
                        <div class="restaurant_name text-start w-100">
                            <h6><strong>{{ $order->restaurant->company_name }}</strong></h6>
                        </div>
                        <hr class="w-100 line">
                        <!-- restaurant name -->
                        <div class="delivery d-flex flex-column text-start w-100">
                            <span class="py-2 w-100 d-flex justify-content-between">
                                Delivery Time
                                <strong>{{ $order->delivery_time }}</strong>
                            </span>
                            <span class="py-3 w-100 d-flex justify-content-between">
                                Distance
                                <strong>2.5km</strong>
                            </span>
                        </div>
                        <hr class="w-100 line">
                        <!-- delivery -->
                        <div class="order_menu w-100">
                            <div class="order row my-2">
                                @if (strlen($order->plates) == 1)
                                    <div class="col-3">
                                        {{-- <div class="item">
                                            <img class="img-fluid" src="../assets/img/hamburger-g3755dde88_1920.jpg"
                                                alt="">
                                        </div> --}}
                                    </div>
                                    <!-- image -->
                                    <div class="col-9 d-flex align-items-center justify-content-between p-0">
                                        <div class="quantity">
                                            <h6><strong>{{ $order->plates[0]->name }}</strong></h6>
                                            <span>x1</span>
                                        </div>
                                        <div class="price_order me-3">
                                            <span class="numb"><strong>+12.99&euro;</strong></span>
                                        </div>
                                    </div>
                                @else
                                    <div class="col-3">
                                        {{-- <div class="item">
                                            <img class="img-fluid" src="../assets/img/hamburger-g3755dde88_1920.jpg"
                                                alt="">
                                        </div> --}}
                                    </div>
                                    <!-- image -->
                                    <div class="col-9 d-flex align-items-center justify-content-between p-0">
                                        <div class="quantity">
                                            <h6><strong>{{ $order->plates[0]->name }}</strong></h6>
                                            <span>x1</span>
                                        </div>
                                        <div class="price_order me-3">
                                            <span class="numb"><strong>+12.99&euro;</strong></span>
                                        </div>
                                    </div>
                                    <div class="col-3">
                                        {{-- <div class="item">
                                            <img class="img-fluid" src="../assets/img/hamburger-g3755dde88_1920.jpg"
                                                alt="">
                                        </div> --}}
                                    </div>
                                    <!-- image -->
                                    <div class="col-9 d-flex align-items-center justify-content-between p-0">
                                        <div class="quantity">
                                            <h6><strong>{{ $order->plates[1]->name }}</strong></h6>
                                            <span>x1</span>
                                        </div>
                                        <div class="price_order me-3">
                                            <span class="numb"><strong>+12.99&euro;</strong></span>
                                        </div>
                                    </div>
                                @endif

                                <!-- details -->
                            </div>
                            <!-- SINGLE ORDER -->
                            {{-- <div class="order row my-2">
                                    <div class="col-3">
                                        <div class="item">
                                            <img class="img-fluid" src="../assets/img/plate-gdb96679aa_1920.jpg"
                                                alt="">
                                        </div>
                                    </div>
                                    <!-- image -->
                                    <div class="col-9 d-flex align-items-center justify-content-between p-0">
                                        <div class="quantity">
                                            <h6><strong>Pizza</strong></h6>
                                            <span>x2</span>
                                        </div>
                                        <div class="price_order me-3">
                                            <span class="numb"><strong>+12.99&euro;</strong></span>
                                        </div>
                                    </div>
                                    <!-- details -->
                                </div> --}}
                            <!-- SINGLE ORDER -->
                        </div>
                        <hr class="w-100 line">
                        <!-- ORDER MENU -->
                        <div class="price my-4 w-100">
                            <h5 class="d-flex justify-content-between">
                                <strong>Total</strong> <strong class="numb">{{ $order->total_amount }}&euro;</strong>
                            </h5>
                        </div>
                        <!-- price -->
                        <a class="btn btn-soft" href="#">View details &raquo;</a>
                        <!-- button -->
                    </div>
                </div>
            @empty
                <p>No Orders Available</p>
            @endforelse
        </div>
        <!-- col -->

    </div>
    </div>
@endsection
