@extends('layouts.index')

@section('content')

    <div class="right">
        <div class="background-corner">
            <div class="background-corner up"></div>

        </div>
    </div>
    <div class="container-fluid py-5">
        <div class="row">

            {{-- <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
            <div class="position-sticky pt-3 sidebar-sticky">
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">
                            <i class="fas fa-tachometer-alt fa-sm fa-fw" aria-hidden="true"></i>
                            Dashboard
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <i class="fa-solid fa-file-pen"></i>
                            Orders
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <i class="fas fa-burger"></i>
                            Foods
                        </a>
                    </li>
                </ul>
            </div>
        </nav> --}}

            <div class="banner">
                <div class="banner_img">
                    @if ($restaurant->image)
                        <img src="{{ asset('storage/' . $restaurant->image) }}" alt="">
                    @else
                        <img src="https://via.placeholder.com/600x300.png?text=Image" alt="">
                    @endif
                </div>

                <div class="info">
                    <div class="align-items-end container d-flex h-100 justify-content-end">
                        <div class="pb-4 px-4 text-black">
                            <!-- title -->
                            <h1>{{ $restaurant->company_name }}</h1>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container d-flex flex-column gap-3 my-3">
                <div class="marketing">
                    <div class="data-info d-flex justify-content-between align-items-center">
                        {{-- company_name --}}
                        <h1>I miei Dati</h1>

                        {{-- edit route button --}}
                        <div>
                            <a class="btn btn_orange" href="{{ route('admin.restaurant.edit', $restaurant->id) }}">
                                <span>
                                    Modifica i dati
                                </span>

                                <i class="fa-solid fa-pen-to-square"></i>
                            </a>
                        </div>
                    </div>

                    <hr>

                </div>
                <div class="row">
                    <div class="col-8 p-4">
                        <div class="restaurant_info d-flex justify-content-between">
                            <div>
                                <div class="lead restaurant_lead fs-6 mb-3">
                                    <strong>Descrizione</strong>
                                </div>
                                <p>{{ $restaurant->description ? $restaurant->description : 'Nessuna descrizione' }}</p>
                            </div>
                        </div>

                        <hr>

                        <div class="delivery d-flex justify-content-between">
                            <div>
                                <div class="lead restaurant_lead fs-6 mb-3">
                                    <strong>Tipi di cucina</strong>
                                </div>
                                @if (count($restaurant->types) > 0)
                                    @foreach ($restaurant->types as $type)
                                        <span>{{ $type->name }} </span>
                                    @endforeach
                                @else
                                    <span>Nessun tipo registrato</span>
                                @endif
                            </div>
                        </div>

                        <hr>
                        <div>
                            <div class="lead restaurant_lead fs-6 mb-3">
                                <strong>Indirizzo</strong>
                            </div>
                            <p>{{ $restaurant->address }}</p>
                        </div>

                        <hr>

                        <div>
                            <div class="lead restaurant_lead fs-6 mb-3">
                                <strong>P.IVA</strong>
                            </div>
                            <p>{{ $restaurant->piva }}</p>
                        </div>

                        <hr>

                        <div>
                            <div class="lead restaurant_lead fs-6 mb-3">
                                <strong>Ordine Minimo</strong>
                            </div>
                            <p>{{ $restaurant->min_order }}€</p>
                        </div>

                        <hr>

                        <div>
                            <div class="lead restaurant_lead fs-6 mb-3">
                                <strong>Costo della consegna</strong>
                            </div>
                            <p> {{ $restaurant->delivery > 0 ? "$restaurant->delivery €" : 'Consegna gratuita' }}</p>
                        </div>

                        <hr>

                        <div>
                            <div class="lead restaurant_lead fs-6 mb-3">
                                <strong>Orario di chiusura</strong>
                            </div>
                            <p> {{ $restaurant->closing_time ? $restaurant->closing_time : 'Non registrato' }}</p>
                        </div>
                    </div>
                </div>
                {{-- image --}}
                {{-- <div class="logo-user">
                    @if ($restaurant->image)
                        <img src="{{ asset('storage/' . $restaurant->image) }}" alt="{{ $restaurant->slug }}">
                    @endif
                </div> --}}

                {{-- description --}}
                {{-- <div class="lead">
                    <strong>Descrizione</strong>:
                    {{ $restaurant->description ? $restaurant->description : 'Nessuna descrizione' }}
                </div> --}}

                {{-- types --}}
                {{-- <div class="lead">
                    <strong>Tipi di cucina</strong>:
                    @if (count($restaurant->types) > 0)
                        @foreach ($restaurant->types as $type)
                            <span>{{ $type->name }} </span>
                        @endforeach
                    @else
                        <span>Nessun tipo registrato</span>
                    @endif
                </div> --}}

                {{-- address --}}
                {{-- <div class="lead">
                    <strong>Indirizzo</strong>:
                    {{ $restaurant->address }}
                </div> --}}

                {{-- piva --}}
                {{-- <div class="lead">
                    <strong>P-IVA</strong>:
                    {{ $restaurant->piva }}
                </div> --}}

                {{-- min_order --}}
                {{-- <div class="lead">
                    <strong>Ordine minimo</strong>:
                    {{ $restaurant->min_order }} €
                </div> --}}

                {{-- delivery --}}
                {{-- <div class="lead">
                    <strong>Costo della consegna</strong>:
                    {{ $restaurant->delivery > 0 ? "$restaurant->delivery €" : 'Consegna gratuita' }}
                </div> --}}

                {{-- closing_time --}}
                {{-- <div class="lead">
                    <strong>Orario di chiusura</strong>:
                    {{ $restaurant->closing_time ? $restaurant->closing_time : 'Non registrato' }}
                </div> --}}
            </div>


            <div class="container marketing mt-5">
                <!-- Three columns of food-->
                <div class="row food pb-5">
                    <div class="view_all d-flex justify-content-between align-items-baseline">
                        <h4>Piatti</h4> <a href="{{ route('admin.plates.index') }}">Vedi tutto</a>
                    </div>

                    <hr>

                    @if (count($restaurant->plates) <= 3)
                        @forelse ($restaurant->plates as $plate)
                            <div class="col-lg-4 g-4">
                                <div class="card p-3 d-flex justify-content-center text-center">
                                    <!-- image -->
                                    {{-- <div class="icons_dash d-flex justify-content-center">
                                        <i class="fa-solid fa-utensils"></i>
                                    </div> --}}
                                    <div class="image d-flex justify-content-center">
                                        @if ($plate->image)
                                            <img class="img-fluid dashboard_plates mb-3"
                                                src="{{ asset('storage/' . $plate->image) }}" alt="{{ $plate->slug }}">
                                        @else
                                            <img class="img-fluid dashboard_plates mb-3"
                                                src="https://via.placeholder.com/600x300.png?text=Image" alt="placeholder">
                                        @endif

                                    </div>

                                    <!-- title -->
                                    <h2>{{ $plate->name }}</h2>
                                    <!-- description -->
                                    <p>
                                        {{ $plate->description }}
                                    </p>

                                    <h3 class="text-center">
                                        <strong class="numb">{{ $plate->price }}&euro;</strong>
                                    </h3>
                                    {{-- price --}}

                                    <!-- button -->
                                    <div class="button d-flex align-self-center">
                                        <a class="btn btn_orange"
                                            href="{{ route('admin.plates.show', $plate->id) }}">Visualizza
                                            i dettagli &raquo;</a>
                                    </div>
                                </div>
                            </div>
                            <!-- col -->
                        @empty
                            <h2>Non ci sono Piatti</h2>
                        @endforelse
                    @else
                        @for ($i = count($restaurant->plates) - 1; $i > count($restaurant->plates) - 4; $i--)
                            <div class="col-lg-4 g-4">
                                <div class="card d-flex justify-content-center p-3 text-center">
                                    <!-- image -->
                                    {{-- <div class="icons_dash d-flex justify-content-center">
                                        <i class="fa-solid fa-utensils"></i>
                                    </div> --}}
                                    <div class="image d-flex justify-content-center">
                                        @if ($restaurant->plates[$i]->image)
                                            <img class="img-fluid dashboard_plates mb-3"
                                                src="{{ asset('storage/' . $restaurant->plates[$i]->image) }}"
                                                alt="{{ $restaurant->plates[$i]->slug }}">
                                        @else
                                            <img class="img-fluid dashboard_plates mb-3"
                                                src="https://via.placeholder.com/600x300.png?text=Image" alt="placeholder">
                                        @endif

                                    </div>

                                    <!-- title -->
                                    <h2>{{ $restaurant->plates[$i]->name }}</h2>

                                    <!-- description -->
                                    <p>
                                        {{ $restaurant->plates[$i]->description }}
                                    </p>

                                    <h3 class="text-center">
                                        <strong class="numb">{{ $restaurant->plates[$i]->price }}&euro;</strong>
                                    </h3>
                                    {{-- price --}}

                                    <!-- button -->
                                    <div class="button ">
                                        <a class="btn btn_orange"
                                            href="{{ route('admin.plates.show', $restaurant->plates[$i]->id) }}">Visualizza
                                            i dettagli &raquo;</a>
                                    </div>
                                </div>
                            </div>
                        @endfor
                    @endif

                </div>
                <!-- row FOOD-->

                <!-- Three columns of ORDERS-->
                <div class="row orders pb-5">
                    <div class="view_all d-flex justify-content-between align-items-baseline">
                        <h4>Ordini</h4> <a href="{{ route('admin.orders.index') }}">Vedi tutto</a>
                    </div>
                    <hr>

                    @if (count($restaurant->orders) <= 3)
                        @forelse ($restaurant->orders as $order)
                            <div class="col-lg-4 col-sm-2 g-4">
                                <div class="card p-3 d-flex align-items-center">
                                    <div class="icons_dash">
                                        <i class="fa-sharp fa-regular fa-file-lines"></i>
                                    </div>
                                    <!-- image -->
                                    <h2 class="my-2">Ordine #{{ $order->id }}</h2>
                                    <!-- title -->
                                    <div class="price mt-3">
                                        <h5>
                                            <strong class="numb">Totale: {{ $order->total_amount }}&euro;</strong>
                                        </h5>
                                    </div>
                                    <!-- price -->
                                    <div class="details my-3">
                                        <span>2.5km - 10min</span>
                                    </div>
                                    <!-- details -->
                                    <a class="btn btn_orange"
                                        href="{{ route('admin.orders.show', $order->id) }}">Visualizza i dettagli
                                        &raquo;</a>
                                    <!-- button-->

                                </div>
                            </div>

                        @empty

                            <h2>Non ci sono Ordini</h2>
                        @endforelse
                    @else
                        @for ($i = count($restaurant->orders) - 1; $i > count($restaurant->orders) - 4; $i--)
                            <div class="col-lg-4 col-sm-2 g-4">
                                <div class="card p-3 d-flex align-items-center">
                                    <div class="icons_dash">
                                        <i class="fa-sharp fa-regular fa-file-lines"></i>
                                    </div>
                                    <!-- image -->
                                    <h2 class="my-2">Ordine #{{ $restaurant->orders[$i]->id }}</h2>
                                    <!-- title -->
                                    <div class="price mt-3">
                                        <h5>
                                            <strong class="numb">Totale:
                                                {{ $restaurant->orders[$i]->total_amount }}&euro;</strong>
                                        </h5>
                                    </div>
                                    <!-- price -->
                                    <div class="details my-3">
                                        <span>2.5km - 10min</span>
                                    </div>
                                    <!-- details -->
                                    <a class="btn btn_orange"
                                        href="{{ route('admin.orders.show', $restaurant->orders[$i]->id) }}">Visualizza i
                                        dettagli &raquo;</a>
                                    <!-- button-->

                                </div>
                            </div>
                        @endfor
                    @endif

                    <!-- col -->

                </div>
                <!-- ROW ORDERS-->

            </div>
        </div>
    </div>
@endsection
