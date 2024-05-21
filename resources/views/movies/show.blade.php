@extends('layouts.app')

@section('title', $movie->title)

@section('content')
<main>
    <h1>{{ $movie->title }}</h1>
<p>{{$movie->original_title}}</p>

</main>

@endsection