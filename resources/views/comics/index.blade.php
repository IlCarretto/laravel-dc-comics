@extends('layouts.app')

@section('content')
    <div class="container mt-4">
        <div class="create-container d-flex justify-content-end align-items-center">
            <a class="mx-1" href="{{ route('comics.create') }}">Inserisci un nuovo fumetto</a>
            <i class="fa-solid fa-arrow-right"></i>
        </div>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">Title</th>
                    <th scope="col">Price</th>
                    <th scope="col">Series</th>
                    <th scope="col">Type</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($comicsArray as $comic)
                    <tr>
                        <th scope="row">{{ $comic->title }}</th>
                        <td>{{ $comic->price }}</td>
                        <td>{{ $comic->series }}</td>
                        <td>{{ $comic->type }}</td>
                        <td>
                            <a href="{{ route('comics.show', $comic->id) }}"><i class="fa-solid fa-eye"></i></a>
                            <a href="{{ route('comics.edit', $comic->id) }}">
                                <i class="fa-solid fa-pen-to-square"></i></a>
                            <form action="{{ route('comics.destroy', $comic->id) }}" class="d-inline" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit"><i class="fa-solid fa-trash"></i></button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
