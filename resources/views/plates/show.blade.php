@extends('layouts.index')

@section('content')
    <div class="container my-3">
        <div class="row">
            <div class="col-8 p-5">
                <div class="plate_info d-flex justify-content-between">
                    <div>
                        <h1>{{ $plate->name }}</h1>
                        @if ($plate->image)
                            <img src="{{ asset('storage/' . $plate->image) }}" alt="{{ $plate->slug }}" width="300">
                        @endif

                    </div>
                </div>

                <hr>

                <div class="lead text-muted fs-6 mb-3">
                    <strong>Descrizione</strong>
                </div>
                <p> {{ $plate->description ? $plate->description : 'NOT SET' }}</p>
                <div class="lead fs-6 mt-3 d-flex flex-row justify-content-between">
                    <h5><strong>Prezzo</strong></h5>
                    <h5 class="price"><strong>{{ $plate->price ? "$plate->price €" : 'NOT SET' }}</strong> </h5>
                </div>

                <div class="visibility w-100 d-flex justify-content-center mt-5">
                    @if ($plate->visibility == false)
                        <div class="rounded-2 btn-delivering" href="#">Non disponibile</div>
                    @else
                        <div class="rounded-2 btn-completed" href="#">Disponibile</div>
                    @endif
                </div>

            </div>
        </div>
    </div>
@endsection
