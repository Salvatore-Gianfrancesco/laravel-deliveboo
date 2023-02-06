@extends('layouts.index')

@section('content')
    <div class="container py-5">
        <div class="d-flex gap-4">
            <div class="details">
                <div class="name">
                    <strong>Name:</strong>
                    {{ $order->client_firstname }}
                </div>
                <div class="surname">
                    <strong>Surname:</strong>
                    {{ $order->client_lastname }}
                </div>
                <div class="address">
                    <strong>Address:</strong>
                    {{ $order->client_address }}
                </div>
                <div class="phone">
                    <strong>Phone Number:</strong>
                    {{ $order->client_phone }}
                </div>
                <div class="total_amount">
                    <strong>Total Amount:</strong>
                    {{ $order->total_amount }}
                </div>
                <div class="delivery_time">
                    <strong>Delivery Time:</strong>
                    {{ $order->delivery_time }}
                </div>
                <div class="is_delivered">
                    <strong>Is Delivered:</strong>
                    {{ $order->is_delivered }}
                </div>
                <div class="datetime">
                    <strong>Date Time:</strong>
                    {{ $order->datetime }}
                </div>

            </div>
        </div>
    </div>
@endsection
