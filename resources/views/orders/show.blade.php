@extends('layouts.index')

@section('content')
    <div class="container my-3">
        <div class="row">
            <div class="col-8 p-5">
                <div class="order_info d-flex justify-content-between">
                    <div>
                        <h1>Ordine #{{ $order->id }}</h1>
                        <div class="lead text-muted fs-6">
                            <strong>Orario di consegna:</strong>
                            {{ $order->delivery_time }}
                        </div>
                    </div>

                    <div class="lead user_details d-flex align-items-center">
                        <img class="img-fluid me-2" src="https://assets.stickpng.com/images/585e4bcdcb11b227491c3396.png"
                            alt="">
                        <h6><strong>{{ $order->client_firstname }} {{ $order->client_lastname }}</strong> </h6>
                    </div>
                </div>

                <hr>

                <div class="delivery d-flex justify-content-between">
                    <div>
                        <div class="lead text-muted fs-6 mb-3">
                            <strong>Indirizzo di consegna</strong>
                        </div>
                        <div class="d-flex align-items-start">
                            <img class="img-fluid me-2" src="https://cdn-icons-png.flaticon.com/512/727/727606.png"
                                alt="">
                            <h5><strong>{{ $order->client_address }}</strong></h5>
                        </div>
                    </div>
                    <div>
                        <div class="lead text-muted fs-6 mb-3">
                            <strong>Numero di telefono</strong>
                        </div>
                        <div class="d-flex align-items-start">
                            <img class="img-fluid me-2" src="https://cdn-icons-png.flaticon.com/512/9497/9497923.png"
                                alt="">
                            <h5><strong>{{ $order->client_phone }}</strong></h5>
                        </div>
                    </div>
                </div>

                <hr>

                <div class="order_plates">
                    <div>
                        <div class="lead fs-6 mb-3">
                            <h5><strong>Articoli</strong></h5>
                        </div>
                        @forelse ($order->plates as $plate)
                            <ul class="p-0 w-100">
                                <li class="d-flex justify-content-between">
                                    <div>
                                        <img class="img-fluid me-2"
                                            src="https://cdn-icons-png.flaticon.com/512/3075/3075929.png" alt="">
                                        {{ $plate->name }} <strong> x {{ $plate->pivot->quantity }}</strong>
                                    </div>
                                    <div class="price">
                                        <strong>{{ $plate->price }}&euro;</strong>
                                    </div>
                                </li>
                            </ul>
                        @empty
                        @endforelse
                    </div>
                </div>

                <hr>


                <div class="total_order d-flex justify-content-between">
                    <div>
                        <h3>Total</h3>
                    </div>

                    <div class="price">
                        <h5><strong>{{ $order->total_amount }}&euro;</strong></h5>
                    </div>
                </div>
                <div class="delivering w-100 d-flex justify-content-center mt-5">
                    @if ($order->is_delivered == false)
                        <div class="rounded-2 btn-delivering" href="#">In consegna</div>
                    @else
                        <div class="rounded-2 btn-completed" href="#">Consegnato</div>
                    @endif
                </div>


            </div>
        </div>

    </div>
    </div>
    </div>
@endsection
