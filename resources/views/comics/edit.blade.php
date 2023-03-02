@extends('layouts.main')

@section('title', 'New Comic')

@section('content')
<section class="add-form py-5 text-center">
    <h2 class="mb-3">MODIFICA FUMETTO</h2>
    @if ($errors->any())
        <div class="col-12 alert mb-3 container p-3">
            <ul>
                @foreach ($errors->all() as $error)
                    <li class="mb-1">{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form class="container d-flex flex-wrap" method="POST" action="{{ route('comics.update', $comic->id) }}">
        @method('PUT')
        @csrf
        <div class="col-4 d-flex flex-column align-items-center mb-3">
            <label class="mb-1" for="title">Titolo</label>
            <input class="p-2 text-center" type="text" id='title' name="title" value="{{ old('title', $comic->title) }}">
        </div>
        <div class="col-4 d-flex flex-column align-items-center mb-3">
            <label class="mb-1" for="thumb">Url compertina</label>
            <input class="p-2 text-center" type="url" id='thumb' name="thumb" value="{{ old('thumb', $comic->thumb) }}">
        </div>
        <div class="col-4 d-flex flex-column align-items-center mb-3">
            <label class="mb-1" for="series">Serie</label>
            <input class="p-2 text-center" type="text" id='series' name="series" value="{{ old('series', $comic->series) }}">
        </div>
        <div class="col-4 d-flex flex-column align-items-center mb-3">
            <label class="mb-1" for="type">Tipo</label>
            <input class="p-2 text-center" type="text" id='type' name="type" value="{{ old('type', $comic->type) }}">
        </div>
        <div class="col-4 d-flex flex-column align-items-center mb-3">
            <label class="mb-1" for="sale_date">Data pubblicazione</label>
            <input class="p-2 text-center" type="date" id='sale_date' name="sale_date" value="{{ old('sale_date', $comic->sale_date) }}">
        </div>
        <div class="col-4 d-flex flex-column align-items-center mb-3">
            <label class="mb-1" for="price">Prezzo</label>
            <input class="p-2 text-center" type="number" step="0.01" min="0" max="9999" id='price' name="price" value="{{ old('price', $comic->price) }}">
        </div>
        <div class="col-12 d-flex flex-column align-items-center mb-3 p-3">
            <label class="mb-1" for="description">Descrizione</label>
            <textarea class="w-100 p-2" name="description" id="description" rows="10">{{ old('description', $comic->description) }}</textarea>
        </div>
        <div class="col-6 d-flex flex-column align-items-center mb-3 p-3">
            <label class="mb-1" for="artists">Artisti</label>
            <textarea class="w-100 p-2" name="artists" id="artists" rows="10">{{ old('artists', $comic->artists) }}</textarea>
        </div>
        <div class="col-6 d-flex flex-column align-items-center mb-3 p-3">
            <label class="mb-1" for="writers">Scrittori</label>
            <textarea class="w-100 p-2" name="writers" id="writers" rows="10">{{ old('writers', $comic->writers) }}</textarea>
        </div>
        <div class="col-12 d-flex justify-content-center">
            <button class="success" type="submit">Salva Modifiche</button>
        </div>
    </form>
</section>

@endsection