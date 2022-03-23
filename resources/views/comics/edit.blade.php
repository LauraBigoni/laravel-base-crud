@extends('layouts.main')

@section('content')
    <div class="container">
        <div class="row">
            <div class="return-back d-flex align-items-center justify-content-end p-4">
                <a href="{{ route('comics.show', $comic) }}" class="btn btn-info">Indietro</a>
            </div>
            <div class="col-12 py-4">
                <h1 class="text-center">Modifica il fumetto</h1>
                <form class="d-flex flex-wrap align-items-center justify-content-between"
                    action="{{ route('comics.show', $comic) }}" method="POST">
                    @csrf

                    <div class="m-3 col-3">
                        <label for="title" class="form-label">Titolo:</label>
                        <input type="text" class="form-control" id="title" name="title" required
                            value="{{ $comic->title }}">
                        <div id="title-help" class="form-text">Modifica il titolo del fumetto</div>
                    </div>
                    <div class="m-3 col-3">
                        <label for="thumb" class="form-label">Immagine:</label>
                        <input type="text" class="form-control" id="thumb" name="thumb" value="{{ $comic->thumb }}">
                        <div id="thumb-help" class="form-text">Modifica l'immagine di copertina</div>
                    </div>
                    <div class="m-3 col-3">
                        <label for="price" class="form-label">Prezzo:</label>
                        <input type="text" class="form-control" id="price" name="price" value="{{ $comic->price }}">
                        <div id="price-help" class="form-text">Modifica il prezzo</div>
                    </div>
                    <div class="m-3 col-3">
                        <label for="series" class="form-label">Serie:</label>
                        <input type="text" class="form-control" id="series" name="series" value="{{ $comic->series }}">
                        <div id="series-help" class="form-text">Modifica la serie del fumetto</div>
                    </div>
                    <div class="m-3 col-3">
                        <label for="sale_date" class="form-label">Data di uscita:</label>
                        <input type="text" class="form-control" id="sale_date" name="sale_date"
                            value="{{ $comic->sale_date }}">
                        <div id="sale_date-help" class="form-text">Modifica la data di uscita</div>
                    </div>
                    <div class="m-3 col-3">
                        <label for="type" class="form-label">Tipo:</label>
                        <input type="text" class="form-control" id="type" name="type" value="{{ $comic->type }}">
                        <div id="type-help" class="form-text">Modifica il genere</div>
                    </div>
                    <div class="m-3 col-8">
                        <label for="description" class="form-label">Descrizione:</label>
                        <textarea class="form-control" id="description" name="description" rows="5">{{ $comic->description }}</textarea>
                        <div id="description-help" class="form-text">Modifica la descrizione del fumetto</div>
                    </div>
                    <div class="col-2 buttons">
                        <button type="reset" class="btn btn-warning">Reset</button>
                        <button type="submit" class="btn btn-primary">Modifica</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
