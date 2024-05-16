@extends('layouts.app')
@section('content')
    <div class="container">
        <h1>Add a new comic</h1>
        @include('partials.error')


        <form action="{{ route('comics.store') }}" method="post">
            @csrf

            <div class="mb-3">
                <label for="title" class="form-label">Name </label>
                <input type="text" class="form-control @error('title') is-invalid @enderror" name="title" id="title"
                    aria-describedby="titleHelper" placeholder="Avatar" value="{{ old('title') }}" />
                @error('title')
                    <div class="text-danger">{{ $message }}</div>
                @enderror

            </div>

            <div class="mb-3">
                <label for="price" class="form-label">Price</label>
                <input type="text" class="form-control @error('price') is-invalid @enderror" name="price"
                    id="price" aria-describedby="priceHelper" placeholder="19.99 $" value="{{ old('price') }}" />
                @error('price')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>


            <div class="mb-3">
                <label for="thumb" class="form-label">Thumb</label>
                <input type="text" class="form-control @error('thumb') is-invalid @enderror" name="thumb"
                    id="thumb" aria-describedby="thumbHelper" placeholder="https://" value="{{ old('thumb') }}" />
                @error('thumb')
                    <div class="text-danger">{{ $message }}</div>
                @enderror

            </div>

            <div class="mb-3">
                <label for="series" class="form-label">Series </label>
                <input type="text" class="form-control @error('series') is-invalid @enderror" name="series"
                    id="series" aria-describedby="seriesHelper" placeholder="Batman:Three Jokers"
                    value="{{ old('series') }}" />
                @error('series')
                    <div class="text-danger">{{ $message }}</div>
                @enderror

            </div>

            <div class="mb-3">
                <label for="type" class="form-label">Type </label>
                <input type="text" class="form-control @error('type') is-invalid @enderror" name="type" id="type"
                    aria-describedby="typeHelper" placeholder="comic book" value="{{ old('type') }}" />
                @error('type')
                    <div class="text-danger">{{ $message }}</div>
                @enderror

            </div>


            <div class="mb-3">
                <label for="description" class="form-label @error('description') is-invalid @enderror">Description</label>
                <textarea class="form-control" name="description" id="description" rows="9">value="{{ old('description') }}"</textarea>
                @error('description')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>


            <button type="submit" class="btn btn-primary">
                Create
            </button>
            <a href="{{ route('comics.index') }}" class="text-decoration-none text-white btn btn-secondary">Back</a>




        </form>

    </div>
@endsection
