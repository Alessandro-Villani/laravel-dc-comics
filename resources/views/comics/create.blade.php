@extends('layouts.main')

@section('title', 'New Comic')

@section('content')
<section class="add-form py-5 text-center">
    <h2 class="mb-3">AGGIUNGI FUMETTO</h2>
    <form class="container d-flex flex-wrap" method="POST" action="{{ route('comics.store') }}">
        @csrf
        <div class="col-4 d-flex flex-column align-items-center mb-3">
            <label class="mb-1" for="title">Titolo</label>
            <input class="p-2 text-center" type="text" id='title' name="title" required>
        </div>
        <div class="col-4 d-flex flex-column align-items-center mb-3">
            <label class="mb-1" for="thumb">Url compertina</label>
            <input class="p-2 text-center" type="url" id='thumb' name="thumb" >
        </div>
        <div class="col-4 d-flex flex-column align-items-center mb-3">
            <label class="mb-1" for="series">Serie</label>
            <input class="p-2 text-center" type="text" id='series' name="series" required>
        </div>
        <div class="col-4 d-flex flex-column align-items-center mb-3">
            <label class="mb-1" for="type">Tipo</label>
            <input class="p-2 text-center" type="text" id='type' name="type" required>
        </div>
        <div class="col-4 d-flex flex-column align-items-center mb-3">
            <label class="mb-1" for="sale_date">Data pubblicazione</label>
            <input class="p-2 text-center" type="date" id='sale_date' name="sale_date" required>
        </div>
        <div class="col-4 d-flex flex-column align-items-center mb-3">
            <label class="mb-1" for="price">Prezzo</label>
            <input class="p-2 text-center" type="number" step="0.01" min="0" max="9999" id='price' name="price" value="0" required>
        </div>
        <div class="col-12 d-flex flex-column align-items-center mb-3 p-3">
            <label class="mb-1" for="description">Descrizione</label>
            <textarea class="w-100 p-2" name="description" id="description" rows="10"></textarea>
        </div>
        <div class="col-6 d-flex flex-column align-items-center mb-3 p-3">
            <label class="mb-1" for="artists">Artisti</label>
            <textarea class="w-100 p-2" name="artists" id="artists" rows="10" required></textarea>
        </div>
        <div class="col-6 d-flex flex-column align-items-center mb-3 p-3">
            <label class="mb-1" for="writers">Scrittori</label>
            <textarea class="w-100 p-2" name="writers" id="writers" rows="10" required></textarea>
        </div>
        <div class="col-12 d-flex justify-content-center">
            <button class="success" type="submit">Aggiungi</button>
        </div>
    </form>
</section>

@endsection