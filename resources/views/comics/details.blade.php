@extends('layouts.layout_base')

@section('title')
    dettagli prodotto {{ $comic["title"] }}
@endsection

@section('content')
    <main>

        <div class="thumb_holder">
            <div class="image_thumb_container">
                <img src="{{ $comic["thumb"] }}" alt="">
            </div>
        </div>
        
        
        <div class="comic_main_container">
            
            <div class="comic_description">
    
                <h2>{{-- titolo fumettto --}}</h2>

                <div class="price_info">

                </div>

                <p>{{-- descrizione del fumetto --}}</p>

            </div>

            <div class="advertisement">
                <img src="" alt="">
            </div>
        </div>


        <div class="comic_info_container">

            <div class="talent">
                <div class="art_by"></div>

                <div class="written_by"></div>
            </div>

            <div class="specs">
                <div class="series"></div>

                <div class="price"></div>

                <div class="on_sale_date"></div>
            </div>
        </div>


    </main>
@endsection