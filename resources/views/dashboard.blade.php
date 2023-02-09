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
                    <img src="{{asset('storage/img/back_banner.png' )}}" alt="">
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

                
                {{-- image --}}
                <div class="logo-user">
                    @if ($restaurant->image)
                        <img src="{{ asset('storage/' . $restaurant->image) }}" alt="{{ $restaurant->slug }}">
                    @endif

                </div>
        
                {{-- description --}}
                <div class="lead">
                    <strong>Descrizione</strong>:
                    {{ $restaurant->description ? $restaurant->description : 'NOT SET' }}
                </div>
        
                {{-- types --}}
                <div class="lead">
                    <strong>Tipi di cucina</strong>:
                    @if (count($restaurant->types) > 0)
                        @foreach ($restaurant->types as $type)
                            <span>{{ $type->name }} </span>
                        @endforeach
                    @else
                        <span>No type</span>
                    @endif
                </div>
        
                {{-- address --}}
                <div class="lead">
                    <strong>Indirizzo</strong>:
                    {{ $restaurant->address ? $restaurant->address : 'NOT SET' }}
                </div>
        
                {{-- piva --}}
                <div class="lead">
                    <strong>P-IVA</strong>:
                    {{ $restaurant->piva ? $restaurant->piva : 'NOT SET' }}
                </div>
        
                {{-- min_order --}}
                <div class="lead">
                    <strong>Ordine minimo</strong>:
                    {{ $restaurant->min_order ? $restaurant->min_order : 'NOT SET' }} €
                </div>
        
                {{-- delivery --}}
                <div class="lead">
                    <strong>Tipo di consegna</strong>:
                    {{ $restaurant->delivery ? $restaurant->delivery : 'NOT SET' }}
                </div>
        
                {{-- closing_time --}}
                <div class="lead">
                    <strong>Orario di chiusura</strong>:
                    {{ $restaurant->closing_time ? $restaurant->closing_time : 'NOT SET' }}
                </div>
            </div>
                    
            
            <div class="container marketing mt-5">

                <!-- Three columns of food-->
                <div class="row food">
                    <div class="view_all d-flex justify-content-between align-items-baseline">
                        <h4>Piatti</h4> <a href="{{ route('admin.plates.index') }}">Vedi tutto</a>
                    </div>
                    <hr>
                    <div class="col-lg-4 g-4">
                        <div class="card p-3">
                            <!-- image -->
                            <div class="image d-flex justify-content-center">
                                <img class="img-fluid icon" src="../assets/img/hamburger-g3755dde88_1920.jpg"
                                    alt="">
                            </div>
                            <!-- title -->
                            <h2>Hamburger</h2>
                            <!-- description -->
                            <p>
                                Some representative placeholder content for the three columns of
                                text below the
                                carousel. This is the first column.
                            </p>
                            <!-- button -->
                            <div class="button d-flex align-self-baseline">
                                <a class="btn btn-soft" href="#">+</a>
                            </div>
                        </div>
                    </div>
                    <!-- col -->

                    <div class="col-lg-4 g-4">
                        <div class="card p-3">
                            <div class="image d-flex justify-content-center">
                                <img class="img-fluid icon" src="../assets/img/hamburger-g44f50ce8d_1920.jpg"
                                    alt="">
                            </div>
                            <!-- image -->
                            <h2>Hamburger</h2>
                            <!-- title -->
                            <p>
                                Another exciting bit of representative placeholder content. This time, we've
                                moved on
                                to the second column.
                            </p>
                            <!-- description -->
                            <div class="button d-flex align-self-baseline">
                                <a class="btn btn-soft" href="#">+</a>
                            </div>
                            <!-- button -->
                        </div>
                    </div>
                    <!-- col -->

                    <div class="col-lg-4 g-4">
                        <div class="card p-3">
                            <div class="image d-flex justify-content-center">
                                <img class="img-fluid icon" src="../assets/img/plate-gdb96679aa_1920.jpg" alt="">
                            </div>
                            <!-- image -->
                            <h2>Pizza</h2>
                            <!-- title -->
                            <p>
                                Another exciting bit of representative place
                            </p>
                            <!-- description -->
                            <div class="button d-flex align-self-baseline">
                                <a class="btn btn-soft"  href="">+</a>
                            </div>
                            <!-- button -->
                        </div>
                    </div>
                    <!-- col -->
                </div>
                <!-- row FOOD-->

                <!-- Three columns of ORDERS-->
                <div class="row orders">
                    <div class="view_all d-flex justify-content-between align-items-baseline">
                        <h4>Ordini</h4> <a href="{{ route('admin.orders.index') }}">Vedi tutto</a>
                    </div>
                    <hr>
                    <div class="col-lg-4 col-sm-2 g-4">
                        <div class="card p-3 d-flex align-items-center">
                            <div class="image">
                                <img class="img-fluid bill" src="../assets/img/check.png" alt="">
                            </div>
                            <!-- image -->
                            <h2 class="my-2">Order #1</h2>
                            <!-- title -->
                            <div class="price mt-3">
                                <h5>
                                    <strong class="numb">Total: 25,90&euro;</strong>
                                </h5>
                            </div>
                            <!-- price -->
                            <div class="details my-3">
                                <span>2.5km - 10min</span>
                            </div>
                            <!-- details -->
                            <a class="btn btn-soft" href="#">View details &raquo;</a>
                            <!-- button -->
                        </div>
                    </div>
                    <!-- col -->

                    <div class="col-lg-4 col-sm-2 g-4">
                        <div class="card p-3 d-flex align-items-center">
                            <div class="image">
                                <img class="img-fluid bill" src="../assets/img/check.png" alt="">
                            </div>
                            <!-- image -->
                            <h2 class="my-2">Order #2</h2>
                            <!-- title -->
                            <div class="price mt-3">
                                <h5>
                                    <strong class="numb">Total: 25,90&euro;</strong>
                                </h5>
                            </div>
                            <!-- price -->
                            <div class="details my-3">
                                <span>2.5km - 10min</span>
                            </div>
                            <!-- details -->
                            <a class="btn btn-soft" href="#">View details &raquo;</a>
                            <!-- button -->
                        </div>
                    </div>
                    <!-- col -->

                    <div class="col-lg-4 col-sm-2 g-4">
                        <div class="card p-3 d-flex align-items-center">
                            <div class="image">
                                <img class="img-fluid bill" src="../assets/img/check.png" alt="">
                            </div>
                            <!-- image -->
                            <h2 class="my-2">Order #3</h2>
                            <!-- title -->
                            <div class="price my-2">
                                <h5>
                                    <strong class="numb">Total: 25,90&euro;</strong>
                                </h5>
                            </div>
                            <!-- price -->
                            <div class="details my-3">
                                <span>2.5km - 10min</span>
                            </div>
                            <!-- details -->
                            <a class="btn btn-soft" href="#">View details &raquo;</a>
                            <!-- button -->
                        </div>
                    </div>
                    <!-- col -->
                </div>
                <!-- ROW ORDERS-->

            </div>
        </div>
    </div>
@endsection
