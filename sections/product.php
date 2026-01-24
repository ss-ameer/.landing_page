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
            <!-- product details column -->
            <div class="col-lg-6 bg-danger rounded-5 p-5 text-white">
                <div class="row h-50 align-content-center" style="--outline-color: white;">
                    <div class="col p-5">
                        <h2 id="productName" class="product--name mb-3">
                            <?= esc_arr($data, 'product.flour-gold.name') ?>
                        </h2>


                        <p id="productDesc" class="lead product--description">
                            <?= esc_arr($data, 'product.flour-gold.description') ?>
                        </p>

                    </div>
                </div>

                <div class="row">
                    <div class="col px-5 ">
                        <a href="<?= esc($data['site']['cta_url']) ?>" class="btn btn-light btn-lg mb-3">More Info</a>
                    </div>
                </div>

                <div class="row h-25 my-auto">
                    <div class="col">
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
    const productData =
        <?= json_encode([
            'flour_gold' => [
                'name' => $data['product']['flour-gold']['name'],
                'description' => $data['product']['flour-gold']['description']
            ],
            'flour_red' => [
                'name' => $data['product']['flour-red']['name'],
                'description' => $data['product']['flour-red']['description']
            ],
            'flour_green' => [
                'name' => $data['product']['flour-green']['name'],
                'description' => $data['product']['flour-green']['description']
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