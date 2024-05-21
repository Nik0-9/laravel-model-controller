@extends('layouts.app')

@section('title', 'Home')

@section('content')
<main class="container vh-100">

<div class="container-fluid h-100 d-flex justify-content-center align-items-center">
    <div class="d-flex justify-content-around w-100">
      <div class="mybox">
        <a href="{{route('books.index')}}"><h2>Books</h2></a>
      </div>
      <div class="mybox">
      <a href="{{route('movies.index')}}"><h2>Movies</h2></a>

      </div>
    </div>
  </div>
</main>

@endsection
