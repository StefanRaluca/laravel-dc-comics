@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col">
                <img src="{{ $comic->thumb }}" alt="">
            </div>
            <div class="col">
                <h2>{{ $comic->title }}</h2>
                <p>{{ $comic->description }}</p>
                <div class="container">
                    <p> Price:{{ $comic->price }} </p>
                    <p> Series: {{ $comic->series }} </p>
                    <p> Sale Date: {{ $comic->sale_date }} </p>
                    <p>Type: {{ $comic->type }} </p>

                    <button class="btn btn-primary"><a href="/comics" class="text-decoration-none text-white py-3">See All</a>
                    </button>
                </div>
            </div>
        </div>

    </div>
@endsection
