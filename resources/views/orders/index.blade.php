@extends('layouts.index')
@section('name')
    Orders
    <a class="text-white btn btn-dark" href="{{ route('admin.orders.create') }}">
        Add New Order
    </a>
@endsection
@section('content')
    <div class="p-5">
        @include('partials.message')
        <div class="table-responsive">
            <table class="table table-striped
    table-hover	
    table-borderless
    table-light
    align-middle">
                <thead class="table-dark">

                    <tr>
                        <th>Id</th>
                        <th>Name</th>
                        <th>Surname</th>
                        <th>Address</th>
                        <th>Phone</th>
                        <th>Total Amount</th>
                        <th>Delivery Time</th>
                        <th>Date Time</th>
                        <th>Is Delivered</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody class="table-group-divider">
                    @forelse($orders as $order)
                        <tr class="table-light">
                            <td scope="row" class="pe-3 fw-bold">{{ $order->id }}</td>
                            <td>{{ $order->client_firstname }}</td>
                            <td>{{ $order->client_lastname }}</td>
                            <td>{{ $order->client_address }}</td>
                            <td>{{ $order->client_phone }}</td>
                            <td>{{ $order->total_amount }}</td>
                            <td>{{ $order->delivery_time }}</td>
                            <td>{{ $order->created_at }}</td>
                            <td>{{ $order->is_delivered }}</td>
                            <td>
                                <a class="d-flex text-white p-2 my-2 bg-primary justify-content-center rounded-2"
                                    href="{{ route('admin.orders.show', $order->id) }}"><i class="fa-solid fa-eye"></i></a>
                                <a class="d-flex text-white p-2 my-2 bg-secondary justify-content-center rounded-2"
                                    href="{{ route('admin.orders.edit', $order->id) }}"><i
                                        class="fa-solid fa-pen-to-square"></i></a>
                                <!-- Modal trigger button -->
                                <button type="button"
                                    class="btn btn-danger d-flex text-white px-3 my-1 justify-content-center rounded-2 w-100"
                                    data-bs-toggle="modal" data-bs-target="#deleteOrder-{{ $order->id }}">
                                    <i class="fa-solid fa-trash"></i>
                                </button>

                                <!-- Modal Body -->
                                <!-- if you want to close by clicking outside the modal, delete the last endpoint:data-bs-backdrop and data-bs-keyboard -->
                                @include('partials.orders-modal')
                            </td>
                        </tr>
                    @empty
                    @endforelse
                </tbody>
                <tfoot>

                </tfoot>
            </table>
        </div>
    </div>
@endsection
