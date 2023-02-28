@php
    $menus = ['characters', 'comics', 'movies', 'tv', 'games', 'collectibles', 'videos', 'fans', 'news', 'shop']
@endphp

<header>
    <div class="top-header">
        <div class="container p-1">
            <a href="#" class="me-3">DC POWER VISA</a>
            <a href="#">ADDITIONAL DC SITES</a>
        </div>
    </div>
    <div class="bottom-header">
        <div class="container">
            <a href="{{route('home')}}" class="p-2 me-3"><img src="{{ Vite::asset('resources/img/dc-logo.png') }}" alt="dc-logo"></a>
            <nav class="h-100">
                <ul class="h-100">
                    @foreach ( $menus as $menu )
                        <li class="me-3 h-100 {{ request()->routeIs("$menu*") ? 'active' : '' }}"><a class="h-100" href="{{route($menu)}}">{{ strtoupper($menu) }}</a></li>                        
                    @endforeach
                </ul>
            </nav>
            <div class="search">
                <input class="searchbar" type="text" placeholder="search">
                <button><i class="fa-solid fa-magnifying-glass"></i></button>
            </div>
        </div>
    </div>
</header>