@extends('layouts.app')
@section('content')
    <div class="jumbotron p-5 mb-4 rounded-3">
        <div class="container py-5">

            <h1 class="display-5 fw-bold pb-2">
                Benvenuto nel tuo Gestionale
            </h1>

            <p class="col-md-8 fs-4">Una piattaforma pensata, realizzata e studiata per i nostri clienti.</p>
            <p>Per qualsiasi problema puoi rivolgerti al nostro servizio clienti, al numero: 02-3478931</p>

            <div class="logo_laravel">
                <img width="150" height="150" src="{{ asset('storage/img/pacfood-logo.png') }}" alt="">
            </div>
        </div>
    </div>
@endsection
