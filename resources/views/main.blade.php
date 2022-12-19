@extends('layout.app')
@section('content')

    <div class="container d-flex justify-content-center flex-wrap">
        @foreach ($movies as $movie)
            <div class="card col-3 me-5 mt-5" style="">
                <img class="card-img" src="{{ $movie->image }}" alt="{{ $movie->title }}">
                <div class="card-body">
                    <h5 class="card-title fw-bold">{{ $movie->title }}</h5>
                    <p class="card-text">titolo originale : {{ $movie->original_title }}</p>
                    <p class="card-text"> data di uscita: {{ $movie->date }}</p>
                    <p class="card-text"> voto: {{ $movie->vote }}</p>
                </div>
            </div>
        @endforeach
    </div>
    @endsection