<?php

$default = [
    'images' => '../assets/images'
];

return [
    'includes' => [
        'head'     => __DIR__ . '/../includes/head.php',
        'header'   => __DIR__ . '/../includes/header.php',
        'footer'   => __DIR__ . '/../includes/footer.php',
    ],

    'sections' => [
        'hero'    => __DIR__ . '/../sections/hero.php',
        'product' => __DIR__ . '/../sections/product.php',
        'uses'    => __DIR__ . '/../sections/uses.php',
        'cta'     => __DIR__ . '/../sections/cta.php',
    ],

    'images' => [
        // products
        'flour_gold' => $default['images'] . '/products/flour_gold.png',
        'flour_red'  => $default['images'] . '/products/flour_red.png',
        'flour_green' => $default['images'] . '/products/flour_green.png',

        // hero graphics
        'hero_back' => $default['images'] . '/graph/graph_back.png',
        'hero_middle' => $default['images'] . '/graph/graph_middle.png',
        'hero_front' => $default['images'] . '/graph/graph_front.png',
    ],

];
