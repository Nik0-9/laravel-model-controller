@extends('layouts.app')

@section('title', 'Movies')

@section('content')
<main class="container">
    <h1 class="text-center m-3">All movies</h1>
    <div class="row">

        @foreach($movies as $item)
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-5">
            <img src="{{$item->image}}" alt="{{$item->title}}" class="image-fluid w-100">
            <div class="">
                <h5 class="text-uppercase pt-2">
                    <a href="{{route('movies.show', $item->id)}}">{{ $item->title }}</a>
                </h5>
                <div class="d-flex justify-content-between ">
                    <p>{{$item->date}}</p>
                    <p>{{$item->vote}}</p>
                </div>

            </div>
        </div>
        @endforeach
    </div>

</main>

@endsection
