@extends('layouts.layout_base')

@section('title')
    home
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
                    <div class="comic_thumb_container">
                        <img src="{{$item['thumb']}}" alt="">
                    </div>
                    <div class="comic_title">
                        @php

                            /* if(str_contains($item["title"], "#")){
                                $actualTitle = explode('#', $item['title'])
                            }else if(str_contains($item["title"], "Vol"){
                                $actualTitle = explode('Vol', $item['title'])
                            } */
                            $actualTitle = explode('#', $item['title'])

                        @endphp
                            
                        <p>{{ strtoupper($actualTitle[0]) }}</p>
                    </div>
                </div>
            @endforeach

        </div>
    </main>
@endsection

{{-- qui si trova il footer --}}