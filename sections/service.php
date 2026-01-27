<section class="service section p-0">
    <div class="container-fluid p-2">
        <div class="row p-3 py-4">
            <?php foreach ($data['service'] as $service): ?>
                <div class="col d-flex align-content-center outline">
                    <div class="outline px-3">
                        <i class="service-icon <?= $service['icon'] ?>"></i>
                    </div>
                    <!-- <div class="outline d-flex flex-row" style="--outline-color: red;"> -->
                    <div class="my-auto">
                        <span class="service-title fw-bold"><?= $service['title'] ?></span> <br>
                        <span class=""><?= $service['content'] ?></span>
                    </div>
                    <!-- </div> -->
                </div>
            <?php endforeach ?>
        </div>
    </div>
</section>