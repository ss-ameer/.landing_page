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
        <div class="row outline" style="--outline-color: red;">

            <div class="col-lg-6 text-center bg-primary">
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

            <!-- this -->
            <div class="col-lg-6 bg-secondary align-content-center outline" style="--outline-color: black;">
                <div class="row outline">
                    <div class="col bg-primary align-content-center">
                        <h2 class="mb-3">
                            <?= esc_arr($data, 'product.title') ?>
                        </h2>

                        <p class="mb-3">
                            <?= esc_arr($data, 'product.description') ?>
                        </p>
                    </div>

                    <div class="col-12 bg-danger">
                        <!-- TODO: Change thumbnail carousel to display actual small thumbnail -->
                        <div id="carouselProductThumb" class="carousel slide">
                            <div class="carousel-inner">
                                <?php foreach ($products_carousel_items as $index => $item): ?>
                                    <div class="carousel-item <?= $index === 0 ? 'active' : '' ?>">
                                        <img src="<?= esc($item['image']) ?>" alt="<?= esc($item['alt']) ?>" class="d-block w-100">
                                    </div>
                                <?php endforeach; ?>
                            </div>
                        </div>
                        <!-- END TODO -->

                    </div>
                </div>

            </div>

        </div>
    </div>
</section>

<script>
    document.addEventListener('DOMContentLoaded', () => {
        const main = document.getElementById('carouselProductMain');
        const thumb = document.getElementById('carouselProductThumb');

        const mainCarousel = bootstrap.Carousel.getOrCreateInstance(main);
        const thumbCarousel = bootstrap.Carousel.getOrCreateInstance(thumb);

        main.addEventListener('slid.bs.carousel', (e) => {
            const index = e.to; // current active index
            thumbCarousel.to(index);
        });

        thumb.querySelectorAll('.carousel-item img').forEach((img, idx) => {
            img.addEventListener('click', () => {
                mainCarousel.to(idx);
            });
        });
    });
</script>