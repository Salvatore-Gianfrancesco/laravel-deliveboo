@extends('layouts.admin')

@section('content')
    @include('partials.errors')
    <h1 class="mt-4">Edit restaurant!</h1>
    <form action="{{ route('admin.restaurants.update', $restaurant->slug) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" name="title" id="title" class="form-control" placeholder="Add title"
                aria-describedby="titleHelper" value="{{ old('title', $restaurant->company_name) }}">
        </div>
        <div class="my-3">
            <label for="description" class="form-label">Overview</label>
            <textarea class="form-control" name="overview" id="overview" rows="3">{{ old('overview', $restaurant->description) }}</textarea>
        </div>

        <button type="submit" class="btn btn-primary mt-3">Update</button>
    </form>
@endsection
