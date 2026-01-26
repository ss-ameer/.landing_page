<?php
$section_data = [
    'headline_sub' => 'Trusted by Our Partners',
    'headline_main' => 'Chosen by Businesses that Value Quality',
]
?>

<section class="section partners">
    <?php include $path['partials']['section_headline']; ?>

    <div class="partners__track">
        <?php foreach ($path['images']['partners'] as $logo): ?>
            <div class="partners__item">
                <img src="<?= esc($logo) ?>" alt="Partner logo">
            </div>
        <?php endforeach; ?>
    </div>
</section>