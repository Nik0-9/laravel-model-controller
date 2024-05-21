@extends('layouts.app')

@section('title', 'Books')

@section('content')
<main class="container">
    <h1 class="text-center m-3">All Books</h1>
    <div class="row">

        @foreach($books as $item)
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-5">
            <img src="{{$item->cover_image}}" alt="{{$item->title}}" class="image-fluid w-100">
            <div class="">
                <h5 class="text-uppercase pt-2"><a href="{{route('books.show', $item->id)}}">{{ $item->title }}</a></h5>
                <p>{{$item->plot}}</p>
            </div>
        </div>
        @endforeach
    </div>

</main>

@endsection
