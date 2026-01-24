<section class="section product">
    <?php $products_carousel_items = [
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
    ]; ?>
    <div class="container">
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

            <div class="col-lg-6 align-content-center bg-danger p-5 text-white rounded-5">
                <div class=" row outline m-3">
                    <div class="col">
                        <h2 class="mb-3">
                            <?= esc_arr($data, 'product.product-flour-gold.name') ?>
                        </h2>

                        <p class="mb-3">
                            <?= esc_arr($data, 'product.product-flour-gold.description') ?>
                        </p>
                    </div>

                    <div class="col-12">
                        <div id="productThumbnails" class="product-thumbnails d-flex justify-content-center gap-3 p-3">
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
    </div>
</section>

<script>
    document.addEventListener('DOMContentLoaded', () => {
        const main = document.getElementById('carouselProductMain');
        const thumbnails = document.getElementById('productThumbnails');

        const mainCarousel = bootstrap.Carousel.getOrCreateInstance(main);

        main.addEventListener('slid.bs.carousel', (e) => {
            const index = e.to;
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