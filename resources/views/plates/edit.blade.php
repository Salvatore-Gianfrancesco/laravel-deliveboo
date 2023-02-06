@extends('layouts.index')

@section('content')
    <h1>Edit Plate</h1>
    @include('partials.error')
    <form action="{{ route('admin.plates.update', $plate->slug) }}" method="post" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" name="name" id="name" class="form-control @error('name') is-invalid @enderror"
                placeholder="" aria-describedby="nameHelper" value="{{ old('name', $plate->name) }}">
            <small id="nameHelper" class="text-muted">Add name with max 100 characters</small>
        </div>
        {{-- <div class="mb-3">
            <img class="w-25" src="{{ asset('storage/' . $plate->cover_image) }}" alt="">
            <div>
                <label for="cover_image" class="form-label">Image</label>
                <input type="file" name="cover_image" id="cover_image"
                    class="form-control @error('cover_image') is-invalid @enderror" placeholder=""
                    aria-describedby="cover_imageHelper">
                <small id="cover_imageHelper" class="text-muted">Replace image</small>
            </div>
        </div> --}}
        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea type="text" name="description" id="description"
                class="form-control @error('description') is-invalid @enderror" placeholder="" aria-describedby="descriptionHelper">{{ old('description', $plate->description) }}</textarea>
            <small id="descriptionHelper" class="text-muted">Add a description with max 300 characters</small>
        </div>
        <div class="mb-3">
            <label for="price" class="form-label">Price</label>
            <input type="number" name="price" id="price" class="form-control @error('price') is-invalid @enderror"
                placeholder="" aria-describedby="priceHelper" value="{{ old('price', $plate->price) }}">
            <small id="priceHelper" class="text-muted">Add price</small>
        </div>
        <div class="mb-3 w-25">
            <div class="d-flex justify-content-between">
                <label for="visibility" class="form-label">Available</label>
                <input type="checkbox" name="visibility" id="visibility" class="@error('visibility') is-invalid @enderror"
                    placeholder="" aria-describedby="visibilityHelper" value="{{ old('visibility', $plate->visibility) }}">
            </div>
            <div class="d-flex justify-content-between">
                <label for="visibility" class="form-label">Not Available</label>
                <input type="checkbox" name="visibility" id="visibility" class="@error('visibility') is-invalid @enderror"
                    placeholder="" aria-describedby="visibilityHelper" value="{{ old('visibility', $plate->visibility) }}">
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Edit</button>
    </form>
@endsection
