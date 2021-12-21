@php
 
 $footer_links = [
    [
        "link_title" => "DC COMICS",
        "links" =>[
            "Characters",
            "Characters",
            "Characters",
            "Characters",
            "Characters",
            "Characters",
            "Characters",
        ]
    ],
    [
        "link_title" => "SHOP",
        "links" => [
            "Shop DC",
            "Shop DC Collectibles",
        ]
    ],
    [
        "link_title" => "DC",
        "links" => [
        "Terms of Use",
        "Terms of Use",
        "Terms of Use",
        "Terms of Use",
        "Terms of Use",
        "Terms of Use",
        "Terms of Use",
        "Terms of Use",
        "Terms of Use",
        "Terms of Use",
        "Terms of Use",
        ]
    ],
    [
        "link_title" => "SITES",
        "links" =>[

            "DC",
            "MAD Magazine",
            "DC Kids",
            "DC Universe",
            "DC Power Visa",
        ]     
    ],
];
 
//  dump($footer_links)
@endphp

<footer>
    <div class="top_footer">
        <div class="container">
            <div class="row">
                <div class="footer_links_container col">
    
                    @foreach ($footer_links as $link)
                        <p class="footer_link_title">
                            {{$link["link_title"]}}
                        </p>
                        
                        @foreach ($link["links"] as $singleLink)
                            <a href="">{{$singleLink}}</a>
                        @endforeach
                    @endforeach
                    
                </div>
    
                <div class="footer_logo_container col">
                    <img src="{{ asset('img/dc-logo-bg.png') }}" alt="">
                </div>
            </div>
    
        </div>
    </div>
    
    <div class="bottom_footer">

    </div>
</footer>