@extends('layouts.index')

@section('content')
    <h1>Create New Plate</h1>

    <form action="{{ route('admin.plates.store') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" name="name" id="name" class="form-control" placeholder=""
                aria-describedby="nameHelper">
            <small id="nameHelper" class="text-muted">Add name with max 100 characters</small>
        </div>
        {{-- <div class="mb-3">
            <label for="cover_image" class="form-label">Image</label>
            <input type="file" name="cover_image" id="cover_image"
                class="form-control @error('cover_image') is-invalid @enderror" placeholder=""
                aria-describedby="cover_imageHelper">
            <small id="cover_imageHelper" class="text-muted">Add an image</small>
        </div> --}}
        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea type="text" name="description" id="description" class="form-control" placeholder=""
                aria-describedby="descriptionHelper"></textarea>
            <small id="descriptionHelper" class="text-muted">Add a description with max 300 characters</small>
        </div>
        <div class="mb-3">
            <label for="price" class="form-label">Price</label>
            <input type="number" name="price" id="price" class="form-control @error('price') is-invalid @enderror"
                placeholder="" aria-describedby="priceHelper" value="{{ old('price') }}">
            <small id="priceHelper" class="text-muted">Add price</small>
        </div>
        <button type="submit" class="btn btn-primary">Add</button>
    </form>
@endsection
