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
    <div class="container">
        @foreach ($footer_links as $link)
            <h3 class="footer_link_title">
                {{$link["link_title"]}}
            </h3>
            
            @foreach ($link["links"] as $singleLink)
                <a href="">{{$singleLink}}</a>
            @endforeach
        @endforeach

    </div>
</footer>