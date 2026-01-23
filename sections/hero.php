<section class="section hero bg-danger">
    <div class="container">
        <div class="row align-items-center justify-content-center">
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

                <p class="lead">

                </p>

                <a href="<?= esc_arr($data, 'site.cta_url') ?>" class="btn btn-lg mt-3 hero__btn--order">
                    <?= esc_arr($data, 'hero.cta_text') ?>
                </a>
            </div>

            <div class="col-lg-6 mx-auto hero__container--graph">

                <img
                    src="../assets/images/graph/graph_back.png"
                    class="hero__image hero__image--back"
                    alt="">

                <img
                    src="../assets/images/graph/graph_middle.png"
                    class="hero__image hero__image--middle"
                    alt="">

                <img
                    src="../assets/images/graph/graph_front.png"
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