@extends('layouts.index')

@section('content')
    <div class="container my-3">
        <div class="d-flex justify-content-between align-items-start mb-3">
            <h1>Ordini</h1>
            {{--  <div>
                <a class="btn btn-soft" href="{{ route('admin.orders.create') }}">Aggiungi un nuovo Ordine</a>
            </div> --}}

            @if ($orders->lastPage() !== 1)
                <div class="orders_pagination d-flex gap-1">
                    {{-- first page --}}
                    <a href="http://127.0.0.1:8000/admin/orders?page=1"
                        class="btn btn_orange {{ $orders->currentPage() === 1 ? 'disabled' : '' }}">
                        <i class="fa-solid fa-backward-fast"></i>
                        <span>Prima pagina</span>
                    </a>

                    {{-- pages (max 3) --}}
                    <div>
                        @if ($orders->lastPage() <= 3)
                            @for ($i = 1; $i <= $orders->lastPage(); $i++)
                                <a href="http://127.0.0.1:8000/admin/orders?page={{ $i }}"
                                    class="btn btn_orange px_4 {{ $orders->currentPage() === $i ? 'disabled' : '' }}">{{ $i }}</a>
                            @endfor
                        @else
                            @for ($i = 1; $i <= 3; $i++)
                                <a href="http://127.0.0.1:8000/admin/orders?page={{ $i }}"
                                    class="btn btn_orange px_4 {{ $orders->currentPage() === $i ? 'disabled' : '' }}">{{ $i }}</a>
                            @endfor
                        @endif
                    </div>

                    {{-- last page --}}
                    <a href="http://127.0.0.1:8000/admin/orders?page={{ $orders->lastPage() }}"
                        class="btn btn_orange {{ $orders->currentPage() === $orders->lastPage() ? 'disabled' : '' }}">
                        <i class="fa-solid fa-forward-fast"></i>
                        <span>Ultima pagina</span>
                    </a>
                </div>
            @endif
        </div>

        @include('partials.message')

        <div class="row orders">
            @forelse($orders as $order)
                <div class="col-sm-6 col-lg-4  g-4">
                    <div class="card p-3 d-flex flex-column align-items-center justify-content-between">

                        <div class="order_number text-center w-75">
                            <i class="fa-sharp fa-regular fa-file-lines"></i>
                            <h5>Order #{{ $order->id }}</h5>
                            <!-- title -->
                            <span class="py-2 w-100 d-flex justify-content-around">
                                Delivery Time <strong class="text-end"> {{ $order->delivery_time }}</strong>
                            </span>
                            <!-- delivery time -->
                        </div>
                        <hr class="w-100">
                        <div class="restaurant_name text-start w-100">
                            <h4><strong>{{ $order->restaurant->company_name }}</strong></h4>
                        </div>
                        <hr class="w-100 line">
                        <!-- restaurant name -->
                        <div class="delivery d-flex flex-column text-start w-100">

                            <h5 class="text-uppercase fw-bold">Client</h5>
                            <div class="client_info">
                                <span class="w-100 d-flex justify-content-between">
                                    Name
                                    <strong class="text-end">{{ $order->client_firstname }}
                                        {{ $order->client_lastname }}</strong>
                                </span>
                                <span class="w-100 d-flex justify-content-between">
                                    Address
                                    <strong class="text-end">{{ $order->client_address }}</strong>
                                </span>
                                <span class="w-100 d-flex justify-content-between">
                                    Phone
                                    <strong class="text-end">{{ $order->client_phone }}</strong>
                                </span>

                            </div>
                        </div>
                        <hr class="w-100 line">
                        <!-- delivery -->
                        <div class="order_menu w-100">
                            <div class="order_plates row my-2">
                                @if (count($order->plates) == 1)
                                    <div class="align-items-center col-1 d-flex justify-content-end">
                                        @if ($order->plates[0]->image)
                                            {{-- <img class="img-fluid icon"
                                                src="{{ asset('storage/' . $order->plates[0]->image) }}"
                                                alt="{{ $order->plates[0]->slug }}"> --}}
                                            <i class="fa-solid fa-circle-check"></i>
                                        @else
                                            <i class="fa-solid fa-circle-check"></i>
                                        @endif
                                    </div>
                                    <!-- image -->
                                    <div class="align-items-center col-11 d-flex justify-content-between p-0">
                                        <div class="d-flex quantity">
                                            <h6 class="mb-0"><strong>{{ $order->plates[0]->name }}</strong>
                                                <span>x1</span>
                                            </h6>

                                        </div>
                                        <div class="price_order me-3">
                                            <span
                                                class="numb"><strong>+{{ $order->plates[0]->price }}&euro;</strong></span>
                                        </div>
                                    </div>
                                    <!-- details -->
                                @else
                                    <div class="align-items-center col-1 d-flex justify-content-end">
                                        <i class="fa-solid fa-circle-check"></i>
                                    </div>
                                    <!-- image -->
                                    <div class="col-11 d-flex align-items-center justify-content-between p-0">
                                        <div class="d-flex quantity">
                                            <h6 class="mb-0"><strong>{{ $order->plates[0]->name }}</strong>
                                                <span>x1</span>
                                            </h6>

                                        </div>
                                        <div class="price_order me-3">
                                            <span
                                                class="numb"><strong>+{{ $order->plates[0]->price }}&euro;</strong></span>
                                        </div>
                                    </div>
                                    <!-- details -->

                                    <div class="align-items-center col-1 d-flex justify-content-end">
                                        <i class="fa-solid fa-circle-check"></i>
                                    </div>
                                    <!-- image -->
                                    <div class="col-11 d-flex align-items-center justify-content-between p-0">
                                        <div class="d-flex quantity">
                                            <h6 class="mb-0">
                                                <strong>{{ $order->plates[1]->name }}</strong>
                                                <span>x1</span>
                                            </h6>

                                        </div>
                                        <div class="price_order me-3">
                                            <span
                                                class="numb"><strong>+{{ $order->plates[1]->price }}&euro;</strong></span>
                                        </div>
                                    </div>
                                    <!-- details -->
                                @endif
                            </div>
                        </div>
                        <hr class="w-100 line">
                        <!-- ORDER MENU -->
                        <div class="price my-4 w-100">
                            <h5 class="d-flex justify-content-between">
                                <strong>Total</strong> <strong class="numb">{{ $order->total_amount }}&euro;</strong>
                            </h5>
                        </div>
                        <!-- price -->
                        @if ($order->is_delivered == false)
                            <div class="rounded-2 btn-delivering" href="#">Delivering</div>
                        @else
                            <div class="rounded-2 btn-completed" href="#">Completed</div>
                        @endif
                        <!-- status -->

                        <div class="action_buttons mt-2">
                            <div class="buttons d-flex justify-content-center align-items-center h-100">
                                <a class="btn btn-small" href="{{ route('admin.orders.show', $order->id) }}">
                                    <i class="fas fa-eye fa-sm fa-fw"></i>
                                </a>
                                <!-- show -->

                                <a class="btn btn-small" href="{{ route('admin.orders.edit', $order->id) }}">
                                    <i class="fas fa-pencil fa-sm fa-fw"></i>
                                </a>
                                <!-- edit -->

                                {{--
                                <button type="button" class="btn btn-small" data-bs-toggle="modal"
                                    data-bs-target="#deleteorder-{{ $order->id }}">
                                    <i class="fa fa-trash fa-sm fa-fw"></i>
                                </button>
                                --}}
                                <!-- delete -->
                            </div>
                        </div>
                        {{--
                        <div class="modal fade" id="deleteorder-{{ $order->id }}" tabindex="-1"
                            data-bs-backdrop="static" data-bs-keyboard="false" role="dialog"
                            aria-labelledby="modalorderId-{{ $order->id }}" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-sm"
                                role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title text-dark" id="modalorderId-{{ $order->id }}">
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
                                        <form action="{{ route('admin.orders.destroy', $order->id) }}" method="post">
                                            @csrf
                                            @method('DELETE')

                                            <button type="submit" class="btn btn-danger">Elimina</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        --}}
                        <!-- action buttons -->
                    </div>
                </div>
            @empty
                <p>Non ci sono Ordini disponibili</p>
            @endforelse
        </div>
        <!-- col -->

        {{-- <div class="orders_pagination">
            {{ $orders->links() }}
        </div> --}}
    </div>
@endsection
