@extends('layouts.app')
@section('content')
    <div class="p-5 mb-4 bg-light rounded-3">
        <div class="container-fluid py-5">
            <h1 class="display-5 fw-bold">Custom jumbotron</h1>
            <p class="col-md-8 fs-4 d-flex">
                Using a series of utilities, you can create this jumbotron, just
                like the one in previous versions of Bootstrap. Check out the
                examples below for how you can remix and restyle it to your liking.
                <img src="https://pad.mymovies.it/filmclub/2017/02/113/locandina.jpg" alt="">

            </p>
            <a href="{{ route('comics.index') }}" class="btn btn-primary">View all comics</a>
        </div>
    </div>
@endsection
