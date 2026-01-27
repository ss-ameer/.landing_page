<?php
$show_outline = false; // Set to false to hide all outlines
?>

<?php
$products_carousel_items = [
    [
        'image' => $path['images']['flour_gold'],
        'alt'   => 'Gold Flour'
    ],
    [
        'image' => $path['images']['flour_red'],
        'alt'   => 'Red Flour'
    ],
    [
        'image' => $path['images']['flour_green'],
        'alt'   => 'Green Flour'
    ],
];

$section_data = [
    'headline_sub' => 'Extended Product Range',
    'headline_main' => 'Additional flour types available upon requirement',
];
?>

<section class="section product p-0">
    <?php include $path['partials']['section_headline']; ?>
    <div class="product--container container rounded-3">
        <div class="row">
            <div class="col-lg-6 text-center">
                <div id="carouselProductMain" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <?php foreach ($products_carousel_items as $index => $item): ?>
                            <div class="carousel-item <?= $index === 0 ? 'active' : '' ?>">
                                <img src="<?= esc($item['image']) ?>" alt="<?= esc($item['alt']) ?>" class="d-block w-100">
                            </div>
                        <?php endforeach; ?>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselProductMain" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselProductMain" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
            <!-- product details column -->
            <div class="col-lg-6 d-flex flex-column justify-content-between text-white shadow-lg<?= $show_outline ? 'outline' : '' ?>" style="--outline-color: yellow;">
                <div class="px-5 mt-auto mb-3 <?= $show_outline ? 'outline' : '' ?>" style="--outline-color: yellow;">
                    <h2 id="productName" class="product--name">
                        <?= esc_arr($data, 'product.flour-gold.name') ?>
                    </h2>
                    <hr class="bg-light opacity-50">
                    <p id="productType" class="product--type">
                        <?= esc_arr($data, 'product.flour-gold.type') ?>
                    </p>
                    <div style="height: 8em; overflow: hidden; text-overflow: ellipsis;">
                        <p id="productDesc" class="lead product--description mb-0" style="height: 100%;">
                            <?= esc_arr($data, 'product.flour-gold.description') ?>
                        </p>
                    </div>
                    <a href="<?= esc($data['site']['cta_url']) ?>" class="btn mb-3 shadow-sm btn-standard">Get Now</a>
                </div>
                <div class="mb-auto <?= $show_outline ? 'outline' : '' ?>" style="--outline-color: white">
                    <div id="productThumbnails" class="product-thumbnails d-flex justify-content-center gap-3 w-100">
                        <?php foreach ($products_carousel_items as $index => $item): ?>
                            <img
                                src="<?= esc($item['image']) ?>"
                                alt="<?= esc($item['alt']) ?>"
                                class="thumbnail-img <?= $index === 0 ? 'active' : '' ?>"
                                data-index="<?= $index ?>">
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
    const productData =
        <?= json_encode([
            'flour_gold' => [
                'name' => $data['product']['flour-gold']['name'],
                'description' => $data['product']['flour-gold']['description'],
                'type' => $data['product']['flour-gold']['type']
            ],
            'flour_red' => [
                'name' => $data['product']['flour-red']['name'],
                'description' => $data['product']['flour-red']['description'],
                'type' => $data['product']['flour-red']['type']
            ],
            'flour_green' => [
                'name' => $data['product']['flour-green']['name'],
                'description' => $data['product']['flour-green']['description'],
                'type' => $data['product']['flour-green']['type']
            ]
        ]) ?>;
</script>

<script>
    document.addEventListener('DOMContentLoaded', () => {
        const main = document.getElementById('carouselProductMain');
        const thumbnails = document.getElementById('productThumbnails');

        const mainCarousel = bootstrap.Carousel.getOrCreateInstance(main);

        main.addEventListener('slid.bs.carousel', (e) => {
            const index = e.to;
            // Update product details
            const keys = ['flour_gold', 'flour_red', 'flour_green'];
            const key = keys[index];
            document.getElementById('productName').textContent = productData[key].name;
            document.getElementById('productType').textContent = productData[key].type;
            document.getElementById('productDesc').textContent = productData[key].description;
            // Remove active from all thumbnails
            thumbnails.querySelectorAll('.thumbnail-img').forEach(img => img.classList.remove('active'));
            // Add active to current
            thumbnails.querySelector(`.thumbnail-img[data-index="${index}"]`).classList.add('active');
        });

        thumbnails.querySelectorAll('.thumbnail-img').forEach((img) => {
            img.addEventListener('click', () => {
                const index = parseInt(img.dataset.index);
                mainCarousel.to(index);
            });
        });
    });
</script>