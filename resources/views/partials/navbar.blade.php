@php

$navLinks = [
    [
        "linkName" => "CHARACTERS",
        "linkNameRoute" => ""
    ],
    [
        "linkName" => "COMICS",
        "linkNameRoute" => "comics"
    ],
    [
        "linkName" => "MOVIES",
        "linkNameRoute" => ""
    ],
    [
        "linkName" => "TV",
        "linkNameRoute" => ""
    ],
    [
        "linkName" => "GAMES",
        "linkNameRoute" => ""
    ],
    [
        "linkName" => "COLLECTIBLES",
        "linkNameRoute" => ""
    ],
    [
        "linkName" => "VIDEOS",
        "linkNameRoute" => ""
    ],
    [
        "linkName" => "FANS",
        "linkNameRoute" => ""
    ],
    [
        "linkName" => "NEWS",
        "linkNameRoute" => ""
    ],
    [
        "linkName" => "SHOPS",
        "linkNameRoute" => ""
        ]
];

    /*
        la parola Request indica una classe di laravel, in essa sono contenute tutta una serie di informazioni 
        che gestiscono la comunicazione tra il client e il server.
        una di queste è il nome della route della pagina attualmente visualizzata, 
        a questa informazione si accede scrivendo la seguente riga
    */
    $routeName = Request::route()->getName();
@endphp

<header>
    <div class="container">
        <div class="my_navbar row">
            <div class="logo_container col">
                <img src="{{ asset('img/dc-logo.png') }}" alt="">
            </div>
            <div class="navbar_links_container col container">
                <ul class="row align-items-center">
                    @foreach ($navLinks as $singleLink)

                    {{-- stampo ogni singolo elemento dall'array $navLinks --}}
                    {{-- ogni elemento nell'array ha due voci: il titolo del link, il nome della route del link --}}
                    {{-- se il nome della rpute del link è uguale al nome della route in cui si trova la pagina attualmente visualizzata a schermo --}}
                    {{-- allora gli aggiungo la classe active, altrimenti no --}}
                        <li class="col"><a href="#" class="{{ $routeName === $singleLink["linkNameRoute"] ? 'active' : '' }}">{{ $singleLink["linkName"] }}</a></li>
                        
                    @endforeach

                    {{-- questo dovrebbe essere un input di testo --}}
                    <li class="col">Search</li>

                </ul>
            </div>
        </div>
    </div>
    @include('partials.header_jumbo')
</header>