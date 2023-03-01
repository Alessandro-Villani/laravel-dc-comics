@extends('layouts.main')

@section('title', 'Comics')

@section('content')
<main id="comics">
    <div class="container">
        <h3 class="title">CURRENT SERIES</h3>
        <div class="content">
            @foreach ($comics as $comic)
                @include('includes.product_card')
            @endforeach
        </div>
        <div class="d-flex justify-content-center">
            <button class="primary me-3">LOAD MORE</button>
            <a class="button success" href="{{ route('comics.create') }}">+</a>
        </div>
    </div>
</main>
@endsection