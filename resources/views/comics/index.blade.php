@extends('layouts.main')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="add-comic d-flex align-items-center justify-content-end p-4">
                <a href="{{ route('comics.create') }}" class="btn btn-primary">Aggiungi un nuovo fumetto</a>
            </div>
            <div class="col-12">
                <h1 class="text-center">COMICS</h1>
                <div class="d-flex flex-wrap justify-content-center">
                    @forelse ($comics as $comic)
                        <div class="card col-2 m-2">
                            <img src="{!! $comic->thumb !!}" class="img-fluid card-img-top" alt="{{ $comic->title }}">
                            <div class="card-body">
                                <h5 class="card-title text-uppercase text-info">{{ $comic->title }}</h5>
                                <p class="card-text">
                                    {{ substr($comic->description, 0, 150) }}...
                                </p>
                            </div>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item"><span class="text-info fw-bold">Tipo:</span>
                                    {{ $comic->type }}</li>
                            </ul>
                            <div class="card-body d-flex align-items-center justify-content-between">
                                <a href="{{ route('comics.show', $comic->id) }}"
                                    class="fw-bold btn btn-sm btn-info me-3">Dettagli <i
                                        class="fa-solid fa-circle-info"></i></a>
                                <a href="{{ route('comics.edit', $comic->id) }}"
                                    class="fw-bold btn btn-sm btn-warning">Modifica <i class="fa-solid fa-pencil"></i></a>
                            </div>
                        </div>
                    @empty
                        <h3>Nessun fumetto da mostrare..</h3>
                    @endforelse
                </div>
            </div>
        </div>
    </div>
@endsection
