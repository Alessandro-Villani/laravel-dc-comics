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
        <button class="primary">LOAD MORE</button>
    </div>
</main>
@endsection