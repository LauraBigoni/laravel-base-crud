@extends('layouts.main')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="add-comic d-flex align-items-center justify-content-end p-4">
                <a href="{{ route('comics.create') }}" class="btn btn-primary">Aggiungi un nuovo fumetto</a>
            </div>
            <div class="col-12">
                <h1 class="text-center">COMICS</h1>
                @if (session('message'))
                    <div class="container alert alert-{{ session('type') }} text-center" role="alert">
                        <p>{{ session('message') }}</p>
                    </div>
                @endif

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
                            <div class="card-body d-flex flex-column align-items-center justify-content-center">
                                <a href="{{ route('comics.show', $comic->id) }}"
                                    class="fw-bold btn btn-sm btn-info">Dettagli <i class="fa-solid fa-circle-info"></i></a>
                                <a href="{{ route('comics.edit', $comic->id) }}"
                                    class="fw-bold btn btn-sm btn-warning my-2">Modifica <i
                                        class="fa-solid fa-pencil"></i></a>
                                <form action="{{ route('comics.destroy', $comic->id) }}" method="POST"
                                    class="delete-form" data-name="{{ $comic->title }}">
                                    @csrf
                                    @method('DELETE')

                                    <button class="fw-bold btn btn-sm btn-danger" type="submit">Elimina <i
                                            class="fa-solid fa-trash-can"></i></button>
                                </form>
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

@section('scripts')
    <script>
        const deleteForms = document.querySelectorAll('.delete-form');
        deleteForms.forEach(form => {
            const name = form.getAttribute('data-name');
            form.addEventListener('submit', (e) => {
                e.preventDefault();
                const confirmDelete = confirm(`Sei sicuro di voler eliminare ${name}?`);
                if (confirmDelete) e.target.submit();
            });
        })
    </script>
@endsection
