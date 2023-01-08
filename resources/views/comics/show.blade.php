@extends('layouts.app');

@section('content')
    <div class="container">
        <h2>{{ $comic->title }}</h2>
        <img src="{{ $comic->thumb }}" alt="">
        <p>{{ $comic->price }}</p>
        <p>{{ $comic->sale_date }}</p>
        <p>{{ $comic->description }}</p>
    </div>
@endsection
