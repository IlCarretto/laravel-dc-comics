@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Modifica un fumetto: {{ $comic->title }}</h2>
        <div class="row justify-content-center">
            <div class="col-7">
                <form action="{{ route('comics.update', $comic->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="mb-2">
                        <label for="title">Inserisci il titolo</label>
                        <input value="{{ $comic->title }}" class="form-control" type="text" name="title" id="title">
                    </div>
                    <div class="mb-2">
                        <label for="description">Inserisci la descrizione</label>
                        <textarea class="form-control" type="text" name="description" id="description" rows="10">{{ $comic->description }}</textarea>
                    </div>
                    <div class="mb-2">
                        <label for="thumb">Inserisci l'immagine</label>
                        <input value="{{ $comic->thumb }}" class="form-control" type="text" name="thumb"
                            id="thumb">
                    </div>
                    <div class="mb-2">
                        <label for="price">Inserisci il prezzo</label>
                        <input value="{{ $comic->price }}" class="form-control" type="text" name="price"
                            id="price">
                    </div>
                    <div class="mb-2">
                        <label for="series">Inserisci la serie</label>
                        <input value="{{ $comic->series }}" class="form-control" type="text" name="series"
                            id="series">
                    </div>
                    <div class="mb-2">
                        <label for="sale_date">Inserisci la data di uscita</label>
                        <input class="form-control" type="date" name="sale_date" id="sale_date">
                    </div>
                    <div class="mb-2">
                        <label for="type">Inserisci il genere</label>
                        <input value="{{ $comic->type }}" class="form-control" type="text" name="type"
                            id="type">
                    </div>

                    <button class="btn btn-primary" type="submit">Invia</button>
                </form>
            </div>
        </div>
    </div>
@endsection
