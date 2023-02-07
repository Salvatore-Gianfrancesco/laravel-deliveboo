<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fontsawesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
        integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">


    <!-- FontAwesome 6.2.1 CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
        integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Usando Vite -->
    @vite(['resources/js/app.js'])
</head>

<body>
    <div id="app">
        <header>
            <nav class="navbar navbar-expand-md navbar-dark bg-dark h-100">
                <div class="container">
                    <!-- logo -->
                    <a class="navbar-brand" href="{{ Route('home') }}">DeliveBoo</a>

                    <!-- dropdown menu (when page resized) -->
                    <button class="navbar-toggler d-lg-none" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapsibleNavId, #sidebarMenu" aria-controls="collapsibleNavId, sidebarMenu"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <!-- menu links -->
                    <div class="collapse navbar-collapse" id="collapsibleNavId">
                        <ul class="navbar-nav me-auto mt-2 mt-lg-0">
                            <li class="nav-item">
                                <a class="nav-link" href="{{ Route('home') }}">Home</a>
                            </li>
                        </ul>

                        <!-- sign out -->
                        <div class="nav-item text-nowrap">
                            <form id="logout-form" action="{{ route('logout') }}" method="POST">
                                @csrf

                                <button type="submit" class="nav-link px-3 bg-transparent text-light border-0">
                                    Esci
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </nav>
        </header>

        <div class="container-fluid">
            <div class="row">
                <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light px-0 sidebar collapse">
                    <div class="position-sticky pt-3 sidebar-sticky">
                        <ul class="nav flex-column">
                            <li class="nav-item">
                                <a class="nav-link {{ Route::currentRouteName() === 'admin.dashboard' ? 'active' : '' }}"
                                    aria-current="page" href="{{ Route('admin.dashboard') }}">
                                    <span data-feather="home" class="align-text-bottom"></span>
                                    <i class="fa-solid fa-gauge-simple-high"></i>
                                    Dashboard
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link {{ Route::currentRouteName() === 'admin.restaurant.index' ? 'active' : '' }}"
                                    href="{{ Route('admin.restaurant.index') }}">
                                    <span data-feather="file" class="align-text-bottom"></span>
                                    <i class="fa-solid fa-store"></i>
                                    Ristorante
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link {{ Route::currentRouteName() === 'admin.plates.index' ? 'active' : '' }}"
                                    href="{{ Route('admin.plates.index') }}">
                                    <span data-feather="file" class="align-text-bottom"></span>
                                    <i class="fa-solid fa-utensils"></i>
                                    I miei Piatti
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link {{ Route::currentRouteName() === 'admin.orders.index' ? 'active' : '' }}"
                                    href="{{ Route('admin.orders.index') }}">
                                    <span data-feather="file" class="align-text-bottom"></span>
                                    <i class="fa-regular fa-file-lines"></i>
                                    I miei Ordini
                                </a>
                            </li>
                        </ul>
                    </div>

                </nav>

                <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
                    @yield('content')
                </main>
            </div>
        </div>
</body>

</html>
