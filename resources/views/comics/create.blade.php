@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Aggiungi un nuovo comic</h2>
        <div class="row justify-content-center">
            <div class="col-7">
                <form action="{{ route('comics.store') }}" method="POST">
                    @csrf
                    <div class="mb-2">
                        <label for="title">Inserisci il titolo</label>
                        <input class="form-control" type="text" name="title" id="title">
                    </div>
                    <div class="mb-2">
                        <label for="description">Inserisci la descrizione</label>
                        <textarea class="form-control" type="text" name="description" id="description"></textarea>
                    </div>
                    <div class="mb-2">
                        <label for="thumb">Inserisci l'immagine</label>
                        <input class="form-control" type="text" name="thumb" id="thumb">
                    </div>
                    <div class="mb-2">
                        <label for="price">Inserisci il prezzo</label>
                        <input class="form-control" type="text" name="price" id="price">
                    </div>
                    <div class="mb-2">
                        <label for="series">Inserisci la serie</label>
                        <input class="form-control" type="text" name="series" id="series">
                    </div>
                    <div class="mb-2">
                        <label for="sale_date">Inserisci la data di uscita</label>
                        <input class="form-control" type="text" name="sale_date" id="sale_date">
                    </div>
                    <div class="mb-2">
                        <label for="type">Inserisci il genere</label>
                        <input class="form-control" type="text" name="type" id="type">
                    </div>

                    <button class="btn btn-primary" type="submit">Invia</button>
                </form>
            </div>
        </div>
    </div>
@endsection
