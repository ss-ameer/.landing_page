<?php
return [
    'site' => [
        'title' => '3A Gold T-55 Flour',
        'cta_url' => 'https://bakersmart.ae/product/graph_bag/',
    ],

    'socials' => [
        'facebook' => [
            'link' => 'https://www.facebook.com/bakersmartme/',
            'icon' => 'bi bi-facebook',
        ],
        'x' => [
            'link' => 'https://bakersmart.ae/#',
            'icon' => 'bi bi-twitter-x',
        ],
        'instagram' => [
            'link' => 'https://www.instagram.com/bakersmartme/?hl=en',
            'icon' => 'bi bi-instagram',
        ],
        'youtube' => [
            'link' => 'https://www.youtube.com/@BakersMartuae',
            'icon' => 'bi bi-youtube',
        ],
        'pinterest' => [
            'link' => 'https://bakersmart.ae/#',
            'icon' => 'bi bi-pinterest',
        ],
    ],

    'header' => [],

    'topbar' => [
        'message' => [
            'value' => 'Clearance Sale is live now. Up to 45% off',
        ],
        'location' => [
            'value' => 'Store Locations',
            'icon' => 'bi bi-geo-alt',
            'link' => 'https://bakersmart.ae/our-store/'
        ],
        'mobile' => [
            'value' => '+971 54 211 8789',
            'icon' => 'bi bi-telephone'
        ]
    ],

    'hero' => [
        'kicker' => 'Bake Like a Pro with',
        'headline' => '3A Gold Flour T-55',
        'subheadline' => 'Premium french-style flour for artisan baking.',
        'tagline' => 'Trusted by professionals for consistent texture, rise, and flavor.',
        'cta_text' => 'Order Now',
    ],

    'product' => [
        'headline-data' => [
            'headline-main' => 'We Got you Covered',
            'headline-sub' => 'Diffent Needs?'
        ],
        'flour-gold' => [
            'name' => '3A Gold T-55',
            'description' => '3A Gold T-55 Flour is a fine, French-style wheat flour with moderate protein content, ideal for baguettes, pastries, and light, airy breads. It provides smooth dough handling and consistently excellent baking results.',
            'type' => 'All Purpose Flour',
            'weight' => '2kg per bag',
            'price' => "15.00",
            'image' => $path['images']['flour_gold'],
        ],
        'flour-red' => [
            'name' => 'Pen Red Flour T-45 ',
            'description' => 'Pen Red T-45 Flour is an ultra-fine, low-protein flour ideal for delicate pastries, cakes, and premium patisserie, delivering light and tender results.',
            'type' => 'Soft Flour',
            'weight' => '2kg per bag',
            'price' => "15.00",
            'image' => $path['images']['flour_red'],
        ],
        'flour-green' => [
            'name' => 'Stork ‘S’ Flour T-65',
            'description' => 'Stork ‘S’ T-65 Flour is a versatile French-style flour ideal for rustic breads, offering great structure, flavor, and a well-developed crust.',
            'type' => 'Hard Flour',
            'weight' => '2kg per bag',
            'price' => "15.00",
            'image' => $path['images']['flour_green'],
        ],
    ],

    'uses' => [
        [
            'title' => 'Artisan Bread',
            'text' => 'Light crumb, strong structure, and golden crusts for baguettes and rustic loaves.',
            'image' => $path['images']['raw-baguette'],
        ],
        [
            'title' => 'Pastries & Viennoiserie',
            'text' => 'Reliable elasticity and softness for croissants, brioche, and laminated doughs.',
            'image' => $path['images']['raw-bread'],
        ],
        [
            'title' => 'Professional Kitchens',
            'text' => 'Consistent performance that supports high-volume production and quality control.',
            'image' => $path['images']['raw-pin'],
        ],
    ],

    'cta' => [
        'headline' => 'Bake with Confidence',
        'text' => 'Upgrade your ingredients and achieve consistent, professional results every time.',
        'button' => 'Order on Baker’s Mart',
    ],

    'partners' => [
        'headline-sub' => 'Trusted by Our Partners',
        'headline-main' => 'Backed, Proven, and Tested'
    ],

    'service' => [
        [
            'title' => 'Flexible Delivery',
            'content' => 'Shipping is available to various locations',
            'icon' => 'bi bi-globe',
        ],
        [
            'title' => 'Secure Payment',
            'content' => 'Pay with popular and secure payment methods', // fixed grammatical error
            'icon' => 'bi bi-lock-fill',
        ],
        [
            'title' => 'Easy Return Policy',
            'content' => 'Hassle-free returns for your convenience',
            'icon' => 'bi bi-arrow-repeat',
        ],
        [
            'title' => 'Help Center',
            'content' => 'Our support team is always ready to assist you.',
            'icon' => 'bi bi-headset',
        ]
    ],

    'footer' => [
        [
            'title' => 'Customer Service',
            'data' => [
                [
                    'label' => 'Delivery Options',
                    'link' => ''
                ],
                [
                    'label' => 'FAQs',
                    'link' => ''
                ],
                [
                    'label' => 'Chat with us',
                    'link' => ''
                ],
                [
                    'label' => 'Latest News',
                    'link' => ''
                ],
            ]
        ],
        [
            'title' => 'Legal',
            'data' => [
                [
                    'label' => 'Privacy Policy',
                    'link' => ''
                ],
                [
                    'label' => 'Refund Policy',
                    'link' => ''
                ],
                [
                    'label' => 'Terms & Conditions',
                    'link' => ''
                ],
            ]
        ],
        [
            'title' => 'Get to know us',
            'data' => [
                [
                    'label' => 'Our story',
                    'link' => ''
                ],
                [
                    'label' => 'Our Locations',
                    'link' => ''
                ],
                [
                    'label' => 'Contact Us',
                    'link' => ''
                ],
                [
                    'label' => 'Careers',
                    'link' => ''
                ]
            ]
        ],
    ],
];
