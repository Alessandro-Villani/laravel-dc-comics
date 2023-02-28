@php
    $menus = [
    [
        'name' => 'dc comics',
        'links' => [
            [
                'text' => 'Characters',
                'url' => '#',
            ],
            [
                'text' => 'Comics',
                'url' => '#',
            ],
            [
                'text' => 'Movies',
                'url' => '#',
            ],
            [
                'text' => 'TV',
                'url' => '#',
            ],
            [
                'text' => 'Games',
                'url' => '#',
            ],
            [
                'text' => 'Collectibles',
                'url' => '#',
            ],
            [
                'text' => 'Videos',
                'url' => '#',
            ],
            [
                'text' => 'Fans',
                'url' => '#',
            ],
            [
                'text' => 'News',
                'url' => '#',
            ],
            [
                'text' => 'Shop',
                'url' => '#',
            ],
        ]
    ],
    [
        'name' => 'shop',
        'links' => [
            [
                'text' => 'Shop DC',
                'url' => '#'
            ],
            [
                'text' => 'Shop DC Collectibles',
                'url' => '#'
            ],
        ]
    ],
    [
        'name' => 'dc',
        'links' => [
            [
                'text' => 'Term Of Use',
                'url' => '#'
            ],
            [
                'text' => 'Privacy Policy (New)',
                'url' => '#'
            ],
            [
                'text' => 'Ad Choices',
                'url' => '#'
            ],
            [
                'text' => 'Advertising',
                'url' => '#'
            ],
            [
                'text' => 'Jobs',
                'url' => '#'
            ],
            [
                'text' => 'Subscriptions',
                'url' => '#'
            ],
            [
                'text' => 'Talent Workshops',
                'url' => '#'
            ],
            [
                'text' => 'CPSC Certificates',
                'url' => '#'
            ],
            [
                'text' => 'Ratings',
                'url' => '#'
            ],
            [
                'text' => 'Shop Help',
                'url' => '#'
            ],
            [
                'text' => 'Contact Us',
                'url' => '#'
            ]
        ]
    ],
    [
        'name' => 'sites',
        'links' => [
            [
                'text' => 'DC',
                'url' => '#'
            ],
            [
                'text' => 'MAD Magazine',
                'url' => '#'
            ],
            [
                'text' => 'DC Kids',
                'url' => '#'
            ],
            [
                'text' => 'DC Universe',
                'url' => '#'
            ],
            [
                'text' => 'DC Power Visa',
                'url' => '#'
            ]
        ]
    ]
]
@endphp

<footer>
    <div class="footer-top">
        <div class="container">
            <nav>
                @foreach ( $menus as $menu )
                <div class="link-section">
                    <h3>{{ $menu['name'] }}</h3>
                    <ul>
                        @foreach ($menu['links'] as $link)
                        <li class="mb-1"><a :href="$link['url']">{{ $link['text'] }}</a></li>
                        @endforeach
                    </ul>
                </div>
                @endforeach
            </nav>
            <img src="{{ Vite::asset('resources/img/dc-logo-bg.png')}}" alt="dc-logo-big">
        </div>
    </div>
    <div class="footer-bottom">
        <nav class="container">
            <div class="nav-left">
                <button class="primary outline">SIGN-UP NOW</button>
            </div>
            <div class="nav-right">
                <span>FOLLOW US</span>
                <ul>
                    <li><a href="#"><img src={{ Vite::asset('resources/img/footer-facebook.png') }} alt="facebook"></a></li>
                    <li><a href="#"><img src={{ Vite::asset('resources/img/footer-twitter.png') }} alt="twitter"></a></li>
                    <li><a href="#"><img src={{ Vite::asset('resources/img/footer-youtube.png') }} alt="youtube"></a></li>
                    <li><a href="#"><img src={{ Vite::asset('resources/img/footer-pinterest.png') }} alt="pinterest"></a></li>
                    <li><a href="#"><img src={{ Vite::asset('resources/img/footer-periscope.png') }} alt="periscope"></a></li>
                </ul>
            </div>
        </nav>
    </div>
</footer>