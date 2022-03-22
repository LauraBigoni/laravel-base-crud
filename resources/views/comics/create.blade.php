@extends('layouts.main')

@section('content')
    <div class="container">
        <div class="row">
            <div class="return-back d-flex align-items-center justify-content-end p-4">
                <a href="{{ route('comics.index') }}" class="btn btn-info">Indietro</a>
            </div>
            <div class="col-12 py-4">
                <h1 class="text-center">Inserisci un nuovo fumetto</h1>
                <form class="d-flex flex-wrap align-items-center justify-content-between"
                    action="{{ route('comics.store') }}" method="POST">
                    @csrf
                    <div class="m-3 col-3">
                        <label for="title" class="form-label">Titolo:</label>
                        <input type="text" class="form-control" id="title" name="title" required>
                        <div id="title-help" class="form-text">Inserisci il titolo del fumetto</div>
                    </div>
                    <div class="m-3 col-3">
                        <label for="thumb" class="form-label">Immagine:</label>
                        <input type="text" class="form-control" id="thumb" name="thumb">
                        <div id="thumb-help" class="form-text">Inserisci un immagine di copertina</div>
                    </div>
                    <div class="m-3 col-3">
                        <label for="price" class="form-label">Prezzo:</label>
                        <input type="number" class="form-control" id="price" name="price" step="1" min="0" max="999"
                            value="1">
                        <div id="price-help" class="form-text">Inserisci un immagine di copertina</div>
                    </div>
                    <div class="m-3 col-3">
                        <label for="series" class="form-label">Serie:</label>
                        <input type="text" class="form-control" id="series" name="series">
                        <div id="series-help" class="form-text">Inserisci un immagine di copertina</div>
                    </div>
                    <div class="m-3 col-3">
                        <label for="sale_date" class="form-label">Data di uscita:</label>
                        <input type="text" class="form-control" id="sale_date" name="sale_date">
                        <div id="sale_date-help" class="form-text">Inserisci una data di uscita</div>
                    </div>
                    <div class="m-3 col-3">
                        <label for="type" class="form-label">Tipo:</label>
                        <input type="text" class="form-control" id="type" name="type">
                        <div id="type-help" class="form-text">Inserisci un genere</div>
                    </div>
                    <div class="m-3 col-3">
                        <label for="description" class="form-label">Descrizione:</label>
                        <textarea class="form-control" id="description" name="description" rows="2"></textarea>
                        <div id="description-help" class="form-text">Inserisci una breve descrizione del fumetto</div>
                    </div>
                    <div class="buttons">
                        <button type="reset" class="btn btn-warning">Reset</button>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
