@extends('layouts.index')

@section('content')
    @include('partials.errors')
    <form action="{{ route('orders.update', $order->id) }}" method="post">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="client_firstname" class="form-label">Name</label>
            <input type="text" name="client_firstname" id="client_firstname"
                class="form-control @error('client_firstname') is-invalid @enderror" placeholder="Insert text"
                aria-describedby="helpId" value="{{ old('client_firstname', $order->client_firstname) }}">
            <small id="helpId" class="text-muted">Insert name</small>
        </div>
        <div class="mb-3">
            <label for="client_lastname" class="form-label">Surname</label>
            <input type="text" name="client_lastname" id="client_lastname"
                class="form-control @error('client_lastname') is-invalid @enderror" placeholder="Insert text"
                aria-describedby="helpId" value="{{ old('client_lastname', $order->client_lastname) }}">
            <small id="helpId" class="text-muted">Insert surname</small>
        </div>
        <div class="mb-3">
            <label for="client_address" class="form-label">Address</label>
            <input type="text" name="client_address" id="client_address"
                class="form-control @error('client_address') is-invalid @enderror" placeholder="Insert text"
                aria-describedby="helpId" value="{{ old('client_address', $order->client_address) }}">
            <small id="helpId" class="text-muted">Insert address</small>
        </div>
        <div class="mb-3">
            <label for="client_phone" class="form-label">Phone</label>
            <input type="number" name="client_phone" id="client_phone"
                class="form-control @error('client_phone') is-invalid @enderror" placeholder="Insert number"
                aria-describedby="helpId" value="{{ old('client_phone', $order->client_phone) }}">
            <small id="helpId" class="text-muted">Insert phone number</small>
        </div>
        <div class="mb-3">
            <label for="total_amount" class="form-label">Total Amount</label>
            <input type="number" name="total_amount" id="total_amount"
                class="form-control @error('total_amount') is-invalid @enderror" placeholder="Insert number"
                aria-describedby="helpId" value="{{ old('total_amount', $order->total_amount) }}">
            <small id="helpId" class="text-muted">Insert total amount</small>
        </div>
        <div class="mb-3">
            <label for="delivery_time" class="form-label">Delivery Time</label>
            <input type="time" name="delivery_time" id="delivery_time"
                class="form-control @error('delivery_time') is-invalid @enderror" placeholder="Insert time"
                aria-describedby="helpId" value="{{ old('delivery_time', $order->delivery_time) }}">
            <small id="helpId" class="text-muted">Insert delivery time</small>
        </div>
        <div class="mb-3">
            <label for="is_delivered" class="form-label">Is Delivered</label>
            <select class="form-select form-select" name="is_delivered" id="is_delivered">
                <option selected>Select one</option>
                <option value="">Yes</option>
                <option value="">No</option>
            </select>
        </div>


        <button type="submit" class="btn btn-dark">Update Order</button>
    </form>
@endsection
