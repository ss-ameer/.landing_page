<section class="section uses">
    <div class="container">
        <div class="row mb-4">
            <div class="col">
                <hr>
            </div>
            <div class="col">
                <h2 class="text-center title">Your Best Choice for</h2>
            </div>
            <div class="col">
                <hr>
            </div>
        </div>
        <div class="row gy-4">
            <?php foreach ($data['uses'] as $use): ?>
                <div class="col-md-4">
                    <div class="card shadow-sm text-center">

                        <img src="<?= esc_arr($use, 'image') ?>" alt="" class="card-img-top uses-bg-image">

                        <div class="card-body">
                            <h5 class="card-title mb-3">
                                <?= esc_arr($use, 'title') ?>
                            </h5>
                            <p class="card-text">
                                <?= esc_arr($use, 'text') ?>
                            </p>
                        </div>

                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>