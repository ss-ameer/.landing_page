<section class="section uses">
    <div class="container">
        <h2 class="text-center">The Best Choice for:</h2>

        <div class="row gy-4">
            <?php foreach ($data['uses'] as $use): ?>
                <div class="col-md-4">
                    <div class="card h-100 border-0 shadow-sm p-3 text-center">
                        <h5 class="card-title mb-3">
                            <?= esc_arr($use, 'title') ?>
                        </h5>
                        <p class="card-text">
                            <?= esc_arr($use, 'text') ?>
                        </p>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>