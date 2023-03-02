@extends('layouts.main')

@section('title', 'title')

@section('content')
    <section class="comic">
        <div class="comic-top">
            <div class="container">
                <img src="{{ $comic->thumb }}" alt="{{ $comic->title }}">
            </div>
        </div>
        <div class="comic-body">
            <div class="container p-4 d-flex">
                <div class="col-8">
                    <h1 class="mb-3">{{ strtoupper($comic->title) }}</h1>
                    <div class="price d-flex mb-3">
                        <div class="col-4 p-3"><span>U.S. Price:</span> ${{ $comic->price }}</div>
                        <div class="col-4 p-3 text-end"><span>AVAILABLE</span></div>
                        <div class="col-4 p-3 text-center"><b>Check Availability</b></div>
                    </div>
                    <p>{{ $comic->description }}</p>
                </div>
                <div class="col-4 text-end">
                    <h4>ADVERTISEMENT</h4>
                    <img src="{{ Vite::asset('resources/img/adv.jpg') }}" alt="adv">
                </div>
            </div>
        </div>
        <div class="comic-bottom">
            <div class="container p-4 d-flex flex-wrap">
                <div class="col-6 p-2 mb-5">
                    <h3 class="mb-3">Talent</h3>
                    <div class="info top py-2 d-flex">
                        <div class="col-4">
                            <strong>Art by:</strong> 
                        </div>
                        <div class="col-8">
                            {{ $comic->artists }}
                        </div>
                    </div>
                    <div class="info py-2 d-flex">
                        <div class="col-4">
                            <strong>Written by:</strong> 
                        </div>
                        <div class="col-8">
                            {{ $comic->writers }}
                        </div>
                    </div>
                </div>
                <div class="col-6 p-2 mb-5">
                    <h3 class="mb-3">Specs</h3>
                    <div class="info top py-2 d-flex">
                        <div class="col-4">
                            <strong>Series:</strong> 
                        </div>
                        <div class="col-8">
                            {{ strtoupper($comic->series) }}
                        </div>
                    </div>
                    <div class="info py-2 d-flex">
                        <div class="col-4">
                            <strong>U.S. Price:</strong> 
                        </div>
                        <div class="col-8 text-dark">
                            ${{ $comic->price }}
                        </div>
                    </div>
                    <div class="info py-2 d-flex">
                        <div class="col-4">
                            <strong>On Sale Date:</strong> 
                        </div>
                        <div class="col-8 text-dark">
                            {{ $comic->getDate() }}
                        </div>
                    </div>
                </div>
                <div class="col-12 d-flex justify-content-center">
                    <a class="button primary me-3" href="{{ route('comics.edit', $comic->id)}}">Modifica</a>
                    <form action="{{ route('comics.destroy', $comic->id) }}" method="POST">
                        @method('DELETE')
                        @csrf
                        <button class="danger">Elimina</button>
                    </form>
                </div>
            </div>
            
        </div>

    </section>
@endsection