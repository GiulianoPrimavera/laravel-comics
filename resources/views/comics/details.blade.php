@extends('layouts.layout_base')

@section('title')
    dettagli prodotto {{ $comic["title"] }}
@endsection

@section('content')
    <main>
        <div class="details_main_container">

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


            <div class="comic_info_main_container">
                <div class="comic_info_container">

                    <div class="talent">

                        <h5>
                            Talent
                        </h5>
                        
                        <div class="my_info_row">
                            
                            <p class="small">Art by:</p>

                            <div class="link_container">
                                @foreach ($comic["artists"] as $artist)
                                    <a href="#">{{$artist}}, </a>
                                @endforeach
                            </div>

                        </div>

                        <div class="my_info_row">

                            <p class="small">Written by:</p>

                            <div class="link_container">
                                @foreach ($comic["writers"] as $writer)
                                    <a href="#">{{$writer}}, </a>
                                @endforeach
                            </div>

                        </div>

                        <div>
                            {{-- questo div serve per il border bottom dell'ultimo elemento --}}
                        </div>
                    </div>

                    <div class="specs">

                        <h5>
                            Specs
                        </h5>
                        
                        <div class="my_info_row">

                            <p class="small">Series:</p>

                            <div class="link_container">
                                <a href="#">ACTION COMICS</a>
                            </div>

                        </div>

                        <div class="my_info_row">

                            <p class="small">U.S. Price:</p>

                            <div class="link_container">
                                {{ $comic['price'] }}
                            </div>
                        </div>

                        <div class="my_info_row">

                            <p class="small">On Sale Date:</p>

                            <div class="link_container">
                                {{ $comic['sale_date'] }}
                            </div>
                        </div>

                        <div>
                            {{-- questo div serve per il border bottom dell'ultimo elemento --}}
                        </div>
                    </div>
                </div>

            </div>

            <div class="comic_info_other_links_container">

                <div class="comic_info_other_links">

                    <div class="other_link">
                        <p>DIGITAL COMICS</p>
                        
                        <div class="other_link_img">
                            <img src="{{ asset('img/buy-comics-digital-comics.png') }}" alt="">
                        </div>
                    </div>
                    
                    <div class="other_link">
                        <p>SHOP DC</p>
                        
                        <div class="other_link_img">
                            <img src="{{ asset('img/buy-comics-subscriptions.png') }}" alt="">
                        </div>
                    </div>

                    <div class="other_link">
                        <p>COMIC SHOP LOCATION</p>
                        
                        <div class="other_link_img">
                            <img src="{{ asset('img/buy-comics-shop-locator.png') }}" alt="">
                        </div>
                    </div>

                    <div class="other_link">
                        <p>SUBSCRIPTIONS</p>
                        
                        <div class="other_link_img">
                            <img src="{{ asset('img/buy-comics-merchandise.png') }}" alt="">
                        </div>
                    </div>
                    <div class="other_link">
                        {{-- questo serve per dare il bordo all'ultimo elemento --}}
                    </div>

                </div>

            </div>

        </div>
    </main>
@endsection