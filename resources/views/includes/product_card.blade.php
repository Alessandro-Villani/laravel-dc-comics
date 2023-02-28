<figure class="card">
    <a href="{{ Route('comics.show', $comic) }}">
        <img src="{{ $comic->thumb }}" alt="{{ $comic->title }}">
        <figcaption>{{ $comic->title }}</figcaption>
    </a>
</figure>