@extends('layouts.layout_base')

@section('title')
    comics
@endsection

{{-- qui si trova l'header con la navbar --}}

@section('content')
    {{-- qui si trova il main --}}
    <main>
        <div class="container">
            
            <div class="badge">
                <h2>
                    CURRENT SERIES
                </h2>
            </div>

            @foreach ($comics as $item)
                <div class="single_card_container">
                    {{-- 
                    alla funzione route, che identifica la rotta della pagina, 
                    passiamo un'altro elemento. In questo caso il secondo elemento è un 
                    array associativo che ha lo stesso nome del secondo parametro passato nella rotta della 
                    view (in questo caso "id").
                    Laravel automaticamente comporrà la rotta mettendo insieme questi due parametri
                    Utilizzando $loop->index (una funzione all'interno di Laravel) possiamo risalire all'indice
                    dell'elemento cliccato
                    --}}
                    
                    <a href="{{ route('comics.details', ["id" => $loop->index]) }}">
                        <div class="comic_thumb_container">
                            <img src="{{$item['thumb']}}" alt="">
                        </div>
                        <div class="comic_title">
                            @php

                                $actualTitle = explode('#', $item['title'])

                            @endphp
                                
                            <p>{{ strtoupper($actualTitle[0]) }}</p>
                        </div>
                    </a>
                </div>
            @endforeach

        </div>
    </main>
@endsection

{{-- qui si trova il footer --}}