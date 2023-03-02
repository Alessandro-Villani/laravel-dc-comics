<figure class="card">
    <a href="{{ Route('comics.show', $comic) }}">
        <img src="{{ $comic->thumb }}" alt="{{ $comic->title }}">
        <figcaption>{{ $comic->title }}</figcaption>
    </a>
    <a class="button edit" href="{{ route('comics.edit', $comic->id) }}"><i class="fa-regular fa-pen-to-square"></i></a>
    <form action="{{ route('comics.destroy', $comic->id) }}" method="POST" class="button delete">
        @method('DELETE')
        @csrf
        <button class="delete"><i class="fa-regular fa-rectangle-xmark"></i></button>
    </form>
</figure>