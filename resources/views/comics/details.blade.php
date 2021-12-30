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
                
                <h3>{{ strtoupper($comic["title"]) }}</h3>

                <div class="price_info">
                    <div class="price">
                        
                        <p>U.S. Price <span>{{ $comic["price"] }}</span></p>

                    </div>
                    <div class="availability">
                        <p class="availability_status">
                            AVAILABLE
                        </p>
                        <div class="dropdown">
                            <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span> Dropdown button</span>
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                              <a class="dropdown-item" href="#">Action</a>
                              <a class="dropdown-item" href="#">Another action</a>
                              <a class="dropdown-item" href="#">Something else here</a>
                            </div>
                        </div>
                        
                    </div>
                </div>

                <p class="description">{{$comic["description"]}}</p>

            </div>

            <div class="advertisement">
                <h6>ADVERTISEMENT</h6>
                <img src="{{ asset('img/adv.jpg') }}" alt="">
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