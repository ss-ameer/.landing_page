<section class="section cta text-center">
    <div class="container">
        <h2 class="mb-3">
            <?= esc_arr($data, 'cta.headline') ?>
        </h2>
        <p class="mb-4">
            <?= esc_arr($data, 'cta.text') ?>
        </p>
        <a href="<?= esc_arr($data, 'site.cta_url') ?>" class="btn btn-lg btn-standard">
            <?= esc_arr($data, 'cta.button') ?>
        </a>
    </div>
</section>