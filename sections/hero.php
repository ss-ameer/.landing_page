<section class="section hero">
    <div class="container">
        <div class="row align-items-center justify-content-center text-white">
            <div class="col-lg-6">

                <span class="fw-bold hero__text--kicker">
                    <?= esc_arr($data, 'hero.kicker') ?>
                </span>

                <h1 class="hero__text--headline">
                    <?= esc_arr($data, 'hero.headline') ?>
                </h1>

                <p class="mt-3 lead">
                    <?= esc_arr($data, 'hero.subheadline') ?> <br>
                    <?= esc_arr($data, 'hero.tagline') ?>
                </p>

                <a href="<?= esc_arr($data, 'site.cta_url') ?>" class="btn btn-lg mt-3 btn-standard">
                    <?= esc_arr($data, 'hero.cta_text') ?>
                </a>
            </div>

            <div class="col-lg-6 mx-auto hero__container--graph">

                <img
                    src="<?= esc_arr($path, 'images.hero_back') ?>"
                    class="hero__image hero__image--back"
                    alt="">

                <img
                    src="<?= esc_arr($path, 'images.hero_middle') ?>"
                    class="hero__image hero__image--middle"
                    alt="">

                <img
                    src="<?= esc_arr($path, 'images.hero_front') ?>"
                    class="hero__image hero__image--front"
                    alt="">

                <img
                    src="../assets/images/light.png"
                    class="hero__image hero__image--light"
                    alt="">

            </div>


        </div>
    </div>
</section>