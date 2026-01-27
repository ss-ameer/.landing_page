<footer class="">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-5 d-flex">
                <img
                    src="<?= esc_arr($path, 'images.brand_icon-light') ?>"
                    alt=""
                    class="footer-icon  m-auto">
            </div>
            <?php foreach ($data['footer'] as $section): ?>
                <div class="col">
                    <p class="fw-bold text-uppercase"><?= $section['title'] ?></p>
                    <?php foreach ($section['data'] as $links): ?>
                        <p><?= $links['label'] ?></p>
                    <?php endforeach ?>
                </div>
            <?php endforeach ?>
        </div>
    </div>
</footer>
<div class="container-fluid text-center py-4 bg-secondary">
    <small>Demo landing page created for evaluation purposes.</small>
</div>

<!-- bootstrap js -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>