@extends('layouts.app')

@section('title', $movie->title)

@section('content')
<main class="container">
    <h1 class="text-center">{{ $movie->title }}</h1>
    <div class="d-flex justify-content-center mb-3">
        <img src="{{$movie->image}}" alt="{{ $movie->title }}" >
    </div>
    <div class="text-center">
        <p>Titolo originale: {{$movie->original_title}} &nbsp; Pubblicato: {{$movie->date}} &nbsp; Valutazione: {{$movie->vote}}</p>
    </div>

</main>

@endsection