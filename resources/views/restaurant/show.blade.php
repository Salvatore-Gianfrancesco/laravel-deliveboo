@extends('layouts.index')

@section('content')
    {{-- <div class="center d-flex justify-content-center">
        <div class="pt-5">
            <h1>{{ $restaurant->company_name }}</h1>
            <p class="lead">Description: {{ $restaurant->description }}</p>
            <p class="lead">Address: {{ $restaurant->address }}</p>
            <p class="lead">PIVA: {{ $restaurant->piva }}</p>
            <p class="lead">Min. Order: {{ $restaurant->min_order }}</p>
            <p class="lead">Closing time: {{ $restaurant->closing_time }}</p>

            <a class="btn btn-primary" href="{{ route('admin.restaurant.edit', $restaurant->id) }}">Edit</a>
        </div>
    </div> --}}

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

            <div id="banner">
                <div class="info">
                    <div class="container">
                        <div class="carousel-caption text-start">
                            <!-- title -->
                            <h1>{{ $restaurant->company_name }}</h1>
                            <!-- button -->
                            <a class="btn btn-lg btn-soft" href="{{ route('admin.restaurant.edit', $restaurant->id) }}">Edit
                                Restaurant</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container restaurant_details">
                <div class="row">
                    <div class="col d-flex">
                        <img class="img-fluid w-25" src="../assets/img/hamburger-g3755dde88_1920.jpg" alt="">
                        <p class="ms-5">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit tenetur neque
                            amet
                            officia, facere eveniet veniam nisi repellat expedita similique!
                        </p>

                    </div>
                    <div class="col">

                    </div>
                    <div class="col">

                    </div>
                </div>
            </div>
            <div class="container marketing mt-5">

                <!-- Three columns of food-->
                <div class="row food">
                    <div class="view_all d-flex justify-content-between align-items-baseline">
                        <h4>Food</h4> <a href="#">View All</a>
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
                                <a class="btn btn-soft" href="#">+</a>
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
                        <h4>Orders</h4> <a href="#">View All</a>
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
