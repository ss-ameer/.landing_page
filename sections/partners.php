<?php
$section_data = [
    'headline_main' => $data['partners']['headline-main'],
    'headline_sub' => $data['partners']['headline-sub']
];

$partners = $path['images']['partners'];
$repeatCount = 3;

$partnersTrack1 = [];
for ($i = 0; $i < $repeatCount; $i++) {
    $partnersTrack1 = array_merge($partnersTrack1, $partners);
}

$partnersTrack2 = array_reverse($partnersTrack1);
?>



<section class="section partners">
    <?php include $path['partials']['section_headline']; ?>

    <!-- normal scroll -->
    <div class="partners__track">
        <?php foreach ($partnersTrack1 as $logo): ?>
            <div class="partners__item">
                <img src="<?= esc($logo) ?>" alt="Partner logo">
            </div>
        <?php endforeach; ?>
    </div>

    <!-- reversed scroll -->
    <div class="partners__track partners__track--reverse">
        <?php foreach ($partnersTrack2 as $logo): ?>
            <div class="partners__item">
                <img src="<?= esc($logo) ?>" alt="Partner logo">
            </div>
        <?php endforeach; ?>
    </div>
</section>