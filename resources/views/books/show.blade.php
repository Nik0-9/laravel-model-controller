@extends('layouts.app')

@section('title', 'Books')

@section('content')
<main class="container">
    <h1 class="text-center">{{ $book->title }}</h1>
    <div class="d-flex justify-content-center ">
        <img src="{{$book->cover_image}}" alt="{{ $book->title }}" >
    </div>
    <p>{{$book->plot}}</p>

</main>

@endsection
