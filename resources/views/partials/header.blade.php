@php
    $menu = [
        [
            'title' => 'Characters',
            'link' => 'home',
        ],
        [
            'title' => 'Comics',
            'link' => 'comics',
        ],
        [
            'title' => 'Movies',
            'link' => 'movies',
        ],
    ];
@endphp

<header>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="{{route('home')}}">
                <img class="logo" src="{{Vite::asset('resources/img/dc-logo.png')}}" alt="">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    @foreach ($menu as $item)
                    <li class="nav-item">
                        <a class="nav-link {{Route::currentRouteName() === $item['link'] ? 'active' : ''}}" aria-current="page" href="{{route($item['link'])}}">{{$item['title']}}</a>
                    </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </nav>
</header>