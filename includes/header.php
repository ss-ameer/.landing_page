<header class="">
    <div class="top-bar d-flex justify-content-between text-white">
        <div class="top-bar--left align-content-center">
            <span><?= esc_arr($data, 'topbar.message.value') ?></span>
        </div>
        <div class="d-flex gap-3 align-content-center top-bar--right">
            <div class="socials">
                <?php foreach ($data['socials'] as $details): ?>
                    <a href="<?= $details['link'] ?>" class="px-1 social-icon">
                        <i class="<?= $details['icon'] ?>"></i>
                    </a>
                <?php endforeach; ?>
            </div>
            <div class="">
                <a href="#" class="location">
                    <i class="pe-1 <?= esc_arr($data, 'topbar.location.icon') ?>"></i>
                    <span class="location--value"><?= esc_arr($data, 'topbar.location.value') ?></span>
                </a>
            </div>
            <div class="">
                <a href="#" class="mobile">
                    <i class="pe-1 mobile--icon <?= esc_arr($data, 'topbar.mobile.icon') ?>"></i>
                    <span class="mobile--value"><?= esc_arr($data, 'topbar.mobile.value') ?></span>
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