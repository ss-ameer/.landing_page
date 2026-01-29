<?php

$default = [
    'images' => '../assets/images',
    'images-graph' => '../assets/images/graph/graph',
    'images-raw' => '../assets/images/raw/raw-',
    // 'images-promo' => '../assets/images/raw/promo',
];

$partners = [];
$promo = [];
$promo_2 = [];

for ($i = 1; $i <= 24; $i++) {
    $partners[] = $default['images'] . "/partners/partner($i).svg";
}

for ($i = 1; $i <= 9; $i++) {
    $promo[] = $default['images'] . "/promo/promo($i).jpg";
}

for ($i = 10; $i <= 18; $i++) {
    $promo_2[] = $default['images'] . "/promo/promo($i).jpg";
}

return [
    'includes' => [
        'head'     => __DIR__ . '/../includes/head.php',
        'header'   => __DIR__ . '/../includes/header.php',
        'footer'   => __DIR__ . '/../includes/footer.php',
    ],

    'partials' => [
        'section_headline' => __DIR__ . '/../includes/partials/section-headline.php',
    ],

    'sections' => [
        'hero'    => __DIR__ . '/../sections/hero.php',
        'product' => __DIR__ . '/../sections/product.php',
        'uses'    => __DIR__ . '/../sections/uses.php',
        'cta'     => __DIR__ . '/../sections/cta.php',
        'partners' => __DIR__ . '/../sections/partners.php',
        'service' => __DIR__ . '/../sections/service.php',
        'newsteller' => __DIR__ . '/../sections/newsteller.php',
    ],

    'images' => [
        // products
        'flour_gold' => $default['images'] . '/products/flour_gold.png',
        'flour_red'  => $default['images'] . '/products/flour_red.png',
        'flour_green' => $default['images'] . '/products/flour_green.png',

        // hero graphics
        'hero_back' => $default['images-graph'] . '_back.png',
        'hero_middle' => $default['images-graph'] . '_middle.png',
        'hero_front' => $default['images-graph'] . '_front.png',

        // brand
        'brand_icon' => $default['images'] . '/brand/brand_icon.png',
        'brand_icon-light' => $default['images'] . '/brand/brand_icon-light.webp',
        'brand_logo' => $default['images'] . '/brand/brand_logo.jpeg',

        // raw
        'raw-baguette' => $default['images-raw'] . 'baguette.png',
        'raw-bread' => $default['images-raw'] . 'bread.png',
        'raw-pin' => $default['images-raw'] . 'pin.png',
        'raw-pastry' => $default['images-raw'] . 'pastry.png',
        'raw-croissant' => $default['images-raw'] . 'croissant.png',

        // partners
        'partners' => $partners,

        // promo
        'promo' => $promo,
        'promo_2' => $promo_2,

    ],

];
