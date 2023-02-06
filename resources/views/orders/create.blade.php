@extends('layouts.index')

@section('content')
    @include('partials.errors')
    <form action="{{ route('orders.store') }}" method="post">
        @csrf
        <div class="mb-3">
            <label for="client_firstname" class="form-label">Name</label>
            <input type="text" name="client_firstname" id="client_firstname"
                class="form-control @error('client_firstname') is-invalid @enderror" placeholder="Insert text"
                aria-describedby="helpId">
            <small id="helpId" class="text-muted">Insert name</small>
        </div>
        <div class="mb-3">
            <label for="client_lastname" class="form-label">Surname</label>
            <input type="text" name="client_lastname" id="client_lastname"
                class="form-control @error('client_lastname') is-invalid @enderror" placeholder="Insert text"
                aria-describedby="helpId">
            <small id="helpId" class="text-muted">Insert surname</small>
        </div>
        <div class="mb-3">
            <label for="client_address" class="form-label">Address</label>
            <input type="text" name="client_address" id="client_address"
                class="form-control @error('client_address') is-invalid @enderror" placeholder="Insert text"
                aria-describedby="helpId">
            <small id="helpId" class="text-muted">Insert address</small>
        </div>
        <div class="mb-3">
            <label for="client_phone" class="form-label">Phone</label>
            <input type="number" name="client_phone" id="client_phone"
                class="form-control @error('client_phone') is-invalid @enderror" placeholder="Insert number"
                aria-describedby="helpId">
            <small id="helpId" class="text-muted">Insert phone number</small>
        </div>
        <div class="mb-3">
            <label for="total_amount" class="form-label">Total Amount</label>
            <input type="number" name="total_amount" id="total_amount"
                class="form-control @error('total_amount') is-invalid @enderror" placeholder="Insert number"
                aria-describedby="helpId">
            <small id="helpId" class="text-muted">Insert total amount</small>
        </div>
        <div class="mb-3">
            <label for="delivery_time" class="form-label">Delivery Time</label>
            <input type="time" name="delivery_time" id="delivery_time"
                class="form-control @error('delivery_time') is-invalid @enderror" placeholder="Insert time"
                aria-describedby="helpId">
            <small id="helpId" class="text-muted">Insert delivery time</small>
        </div>
        <div class="mb-3">
            <label for="datetime" class="form-label">Date Time</label>
            <input type="datetime" name="datetime" id="datetime"
                class="form-control @error('datetime') is-invalid @enderror" placeholder="Insert time"
                aria-describedby="helpId">
            <small id="helpId" class="text-muted">Insert date time</small>
        </div>

        <button type="submit" class="btn btn-dark">Add Order</button>
    </form>
@endsection
