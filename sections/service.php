<section class="service section p-0">
    <div class="container-fluid bg-primary">
        <div class="row">
            <?php foreach ($data['service'] as $service): ?>
                <div class="col d-flex">
                    <div>
                        <i class="<?= $service['icon'] ?>"></i>
                    </div>
                    <div>
                        <p class="fw-bold"><?= $service['title'] ?></p>
                        <p class="lead"><?= $service['content'] ?></p>
                    </div>
                </div>
            <?php endforeach ?>
        </div>
    </div>
</section>