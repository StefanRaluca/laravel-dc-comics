@extends('layouts.app')
@section('content')
    <div class="container">
        <h1>Edit comic</h1>

        <form action="{{ route('comics.update', $comic) }}" method="post">

            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="title" class="form-label">Name </label>
                <input type="text" class="form-control" name="title" id="title" aria-describedby="titleHelper"
                    placeholder="Avatar" value="{{ $comic->title }}" />

            </div>

            <div class="mb-3">
                <label for="price" class="form-label">Price</label>
                <input type="text" class="form-control" name="price" id="price" aria-describedby="priceHelper"
                    placeholder="19.99 $" value="{{ $comic->price }}" />
            </div>


            <div class="mb-3">
                <label for="thumb" class="form-label">Thumb</label>
                <input type="text" class="form-control" name="thumb" id="thumb" aria-describedby="thumbHelper"
                    placeholder="https://" value="{{ $comic->thumb }}" />

            </div>

            <div class="mb-3">
                <label for="series" class="form-label">Series </label>
                <input type="text" class="form-control" name="series" id="series" aria-describedby="seriesHelper"
                    placeholder="Batman:Three Jokers" value="{{ $comic->series }}" />

            </div>

            <div class="mb-3">
                <label for="type" class="form-label">Type </label>
                <input type="text" class="form-control" name="type" id="type" aria-describedby="typeHelper"
                    placeholder="comic book" value="{{ $comic->type }}" />

            </div>


            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <textarea class="form-control" name="description" id="description" rows="9">{{ $comic->description }}</textarea>
            </div>


            <button type="submit" class="btn btn-primary" value="Invia">
                Edit
            </button>
            <a href="/comics" class="btn btn-secondary">Back to all </a>



        </form>

    </div>
@endsection
