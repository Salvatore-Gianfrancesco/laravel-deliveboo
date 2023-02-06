@extends('layouts.index')

@section('content')
    <h1 class="mt-4">Edit Restaurant!</h1>
    <form action="{{ route('admin.restaurant.update', $restaurant->id) }}" method="POST">
        @csrf
        @method('PUT')
        @include('partials.error')
        <div class="form-group">
            <label for="company_name" class="form-label">Company Name</label>
            <input type="text" name="company_name" id="company_name" class="form-control" placeholder="Add title"
                aria-describedby="titleHelper" value="{{ old('company_name', $restaurant->company_name) }}">
        </div>
        <div class="my-3">
            <label for="description" class="form-label">Description</label>
            <textarea class="form-control" name="description" id="description" rows="2">{{ old('description', $restaurant->description) }}</textarea>
        </div>

        <div class="my-3">
            <label for="address" class="form-label">address</label>
            <textarea class="form-control" name="address" id="address" rows="1">{{ old('address', $restaurant->address) }}</textarea>
        </div>

        <div class="my-3">
            <label for="piva" class="form-label">piva</label>
            <textarea class="form-control" name="piva" id="piva" rows="1">{{ old('piva', $restaurant->piva) }}</textarea>
        </div>

        <div class="my-3">
            <label for="min_order" class="form-label">min_order</label>
            <textarea class="form-control" name="min_order" id="min_order" rows="1">{{ old('min_order', $restaurant->min_order) }}</textarea>
        </div>

        <div class="my-3">
            <label for="closing_time" class="form-label">closing_time</label>
            <textarea class="form-control" name="closing_time" id="closing_time" rows="1">{{ old('closing_time', $restaurant->closing_time) }}</textarea>
        </div>

        <button type="submit" class="btn btn-primary mt-3 mb-5">Update</button>
    </form>
@endsection
