<section class="newsteller section">
    <div class="container">
        <div class="newsteller--container position-relative d-flex flex-column">

            <div class="half-box">
                <div class="d-flex bg-danger gap-3 h-100 justify-content-center">
                    <?php foreach ($path['images']['promo'] as $promoImage): ?>
                        <img src="<?php echo $promoImage; ?>" alt="Promo Image" class="newsteller--image rounded-4">
                    <?php endforeach; ?>
                </div>
            </div>
            <div class="flex-fill half-box bg-secondary">
                <!-- content -->
            </div>

            <div class="overlay-box container p-5">
                <div class="container">
                    <div class="row gap-3">
                        <div class="col d-flex flex-column align-items-center justify-content-center bg-success">
                            <h3 class="">Follow Us On</h3>
                            <div class="">
                                <?php foreach ($data['socials'] as $social): ?>
                                    <a href="<?= $social['link']; ?>" class="">
                                        <i class="<?= $social['icon']; ?>"></i>
                                    </a>
                                <?php endforeach; ?>
                            </div>
                        </div>
                        <div class="col bg-warning d-flex flex-column align-items-center justify-content-center">
                            <h3>Sign Up to our Newsteller</h3>
                            <form action="">
                                <div class="d-flex gap-2">
                                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- <div class="box5 overlay-box align-self-center">Box 5</div> -->

    </div>

    </div>
</section>