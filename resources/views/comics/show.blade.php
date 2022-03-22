@extends('layouts.main')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12 d-flex flex-column align-items-center justify-content-center">
                <div class="card col-4 m-4">
                    <img src="{!! $comic->thumb !!}" class="img-fluid card-img-top" alt="{{ $comic->title }}">
                    <div class="card-body">
                        <h5 class="card-title text-info text-uppercase">{{ $comic->title }}</h5>
                        <p class="card-text">
                            {{ $comic->description }}
                        </p>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item"><span class="text-info fw-bold">Serie:</span> {{ $comic->series }}</li>
                        <li class="list-group-item"><span class="text-info fw-bold">Tipo:</span> {{ $comic->type }}</li>
                        <li class="list-group-item"><span class="text-info fw-bold">Uscita:</span> {{ $comic->sale_date }}</li>
                        <li class="list-group-item"><span class="text-info fw-bold">Prezzo:</span> {{ $comic->price }}€</li>
                    </ul>
                </div>
            </div>
            <div class="return-back d-flex align-items-center justify-content-end pb-4">
                <a href="{{ route('comics.index') }}" class="btn btn-info">Indietro</a>
            </div>
        </div>
    </div>
@endsection
