@extends('layouts.main')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <h1 class="text-center">COMICS</h1>
                <div class="d-flex flex-wrap justify-content-center">
                    @foreach ($comics as $comic)
                        <div class="card col-2 m-2">
                            <img src="{!! $comic->thumb !!}" class="img-fluid card-img-top" alt="{{ $comic->title }}">
                            <div class="card-body">
                                <h5 class="card-title">{{ $comic->title }}</h5>
                                <p class="card-text">
                                    {{ substr($comic->description, 0, 150) }}...
                                </p>
                            </div>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">Serie: {{ $comic->series }}</li>
                                <li class="list-group-item">Tipo: {{ $comic->type }}</li>
                                <li class="list-group-item">Uscita: {{ $comic->sale_date }}</li>
                                <li class="list-group-item">Prezzo: {{ $comic->price }}€</li>
                            </ul>
                            <div class="card-body">
                                <a href="{{ route('comics.show', $comic->id) }}" class="card-link">Info</a>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection
