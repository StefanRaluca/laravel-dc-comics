@extends('layouts.app')
@section('content')
    <div class="container">
        <h1>Add a new comic</h1>


        <form action="{{ route('comics.store') }}" method="post">
            @csrf

            <div class="mb-3">
                <label for="title" class="form-label">Name </label>
                <input type="text" class="form-control" name="title" id="title" aria-describedby="titleHelper"
                    placeholder="Avatar" />

            </div>

            <div class="mb-3">
                <label for="price" class="form-label">Price</label>
                <input type="text" class="form-control" name="price" id="price" aria-describedby="priceHelper"
                    placeholder="19.99 $" />
            </div>


            <div class="mb-3">
                <label for="src" class="form-label">Thumb</label>
                <input type="text" class="form-control" name="src" id="src" aria-describedby="srcHelper"
                    placeholder="https://" />

            </div>

            <div class="mb-3">
                <label for="series" class="form-label">Series </label>
                <input type="text" class="form-control" name="series" id="series" aria-describedby="seriesHelper"
                    placeholder="Batman:Three Jokers" />

            </div>

            <div class="mb-3">
                <label for="type" class="form-label">Type </label>
                <input type="text" class="form-control" name="type" id="type" aria-describedby="typeHelper"
                    placeholder="comic book" />

            </div>


            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <textarea class="form-control" name="description" id="description" rows="9"></textarea>
            </div>


            <button type="submit" class="btn btn-primary">
                Create
            </button>



        </form>

    </div>
@endsection
