<header class="">
    <div class="top-bar d-flex justify-content-between text-white">
        <div class="top-bar--left align-content-center">
            <span><?= esc_arr($data, 'topbar.message') ?></span>
        </div>
        <div class="d-flex gap-3 top-bar--right">
            <div>
                <?php foreach ($data['socials'] as $details): ?>
                    <a href="<?= $details['link'] ?>" class="px-1">
                        <i class="<?= $details['icon'] ?>"></i>
                    </a>
                <?php endforeach; ?>
            </div>
            <div>
                <a href="#">
                    <i class="bi bi-geo-alt"></i>
                    <span class="">STORE LOCATIONS</span>
                </a>
            </div>
            <div>
                <a href="#">
                    <i class="bi bi-telephone"></i>
                    <span><?= esc_arr($data, 'topbar.mobile') ?></span>
                </a>
            </div>
        </div>
    </div>
    <!-- <div class="container text-center">
        <small>Demo landing page created for evaluation purposes.</small>
    </div> -->
    <nav class="navbar p-0">
        <div class="container-fluid">
            <a href="#" class="navbar-brand m-auto">
                <img
                    src="<?= esc_arr($path, 'images.brand_icon') ?>"
                    alt="baker's mart icon"
                    width=""
                    height="80"
                    class="">
            </a>
        </div>
    </nav>
</header>