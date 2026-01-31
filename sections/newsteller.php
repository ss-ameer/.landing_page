<?php
$section_data = [
    'headline_main' => $data['newsteller']['headline-main'],
    'headline_sub' => $data['newsteller']['headline-sub']
];
?>

<section class="newsteller section">
    <?php include $path['partials']['section_headline']; ?>

    <div class="container">
        <div class="newsteller--container position-relative d-flex flex-column gap-3">

            <div class="half-box">
                <div class="d-flex gap-3 h-100 justify-content-center">
                    <?php foreach ($path['images']['promo'] as $promoImage): ?>
                        <img src="<?php echo $promoImage; ?>" alt="Promo Image" class="newsteller--image newsteller--image__top rounded-4">
                    <?php endforeach; ?>
                </div>
            </div>
            <div class="half-box">
                <div class="d-flex gap-3 h-100 justify-content-center">
                    <?php foreach ($path['images']['promo_2'] as $promoImage): ?>
                        <img src="<?php echo $promoImage; ?>" alt="Promo Image" class="newsteller--image newsteller--image__bottom rounded-4">
                    <?php endforeach; ?>
                </div>
            </div>

            <div class="overlay-box w-100">

                <div class="row gap-4">
                    <div class="col rounded-4 d-flex p-3 flex-column align-items-center justify-content-center">
                        <h3 class="">Follow Us On</h3>
                        <div class="socials d-flex gap-3">
                            <?php foreach ($data['socials'] as $social): ?>
                                <a href="<?= $social['link']; ?>" class="social-icon px-3 py-2 rounded" style="background:<?= $social['color']; ?>;">
                                    <i class="m-auto <?= $social['icon']; ?>"></i>
                                </a>
                            <?php endforeach; ?>
                        </div>
                    </div>
                    <div class="col d-flex p-3 rounded-4 flex-column align-items-center justify-content-center">
                        <h3>Sign Up to our Newsteller</h3>
                        <form action="" class="w-75">
                            <div class="d-flex align-items-center justify-content-center gap-2">
                                <input type="email" class="form-control w-50" id="inputEmail" aria-describedby="emailHelp">
                                <button type="submit" class="btn btn-standard">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>
        <!-- <div class="box5 overlay-box align-self-center">Box 5</div> -->

    </div>

    </div>
</section>