@extends('layouts.index')

@section('content')
    <div class="container">
        <h1>Plates</h1>
        <a class="btn btn-primary my-3" href="{{ route('admin.plates.create') }}">New plate</a>
        <div class="table-responsive mt-4">
            <table class="table table-dark">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">NAME</th>
                        <th scope="col">SLUG</th>
                        <th scope="col">DESCRIPTION</th>
                        <th scope="col">PRICE</th>
                        <th scope="col">VISIBILITY</th>
                        <th scope="col">ACTIONS</th>

                    </tr>
                </thead>
                <tbody>
                    @forelse($plates as $plate)
                        <tr class="">
                            <td scope="row">{{ $plate->id }}</td>
                            <td>{{ $plate->name }}</td>
                            <td>{{ $plate->slug }}</td>
                            {{-- <td><img class="w-75" src="{{ asset('storage/' . $plate->cover_image) }}" alt=""></td> --}}

                            <td>{{ $plate->description }}</td>
                            <td>{{ $plate->price }}</td>
                            <td>{{ $plate->visibility }}</td>
                            <td class="d-flex flex-column">
                                <a class="btn btn-primary btn-sm my-1" href="{{ route('admin.plates.show', $plate->id) }}"
                                    role="button"><i class="fas fa-eye fa-sm fa-fw" aria-hidden="true"></i>
                                </a>
                                <a class="btn btn-secondary btn-sm my-1" href="{{ route('admin.plates.edit', $plate->id) }}"
                                    role="button"><i class="fas fa-pencil fa-sm fa-fw" aria-hidden="true"></i>
                                </a>
                                <!-- Modal trigger button -->
                                <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal"
                                    data-bs-target="#deleteplate-{{ $plate->id }}"><i class="fa fa-trash fa-sm fa-fw"
                                        aria-hidden="true"></i>
                                </button>

                                <!-- Modal Body -->
                                <!-- if you want to close by clicking outside the modal, delete the last endpoint:data-bs-backdrop and data-bs-keyboard -->
                                <div class="modal fade" id="deleteplate-{{ $plate->id }}" tabindex="-1"
                                    data-bs-backdrop="static" data-bs-keyboard="false" role="dialog"
                                    aria-labelledby="modalplateId-{{ $plate->id }}" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-sm"
                                        role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title text-dark" id="modalplateId-{{ $plate->id }}">
                                                    Delete
                                                    plate</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body text-dark">
                                                Do you really want to delete this element permanently?
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary"
                                                    data-bs-dismiss="modal">Close</button>
                                                <form action="{{ route('admin.plates.destroy', $plate->id) }}"
                                                    method="post">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger">Delete</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td>No plates Available</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
@endsection
