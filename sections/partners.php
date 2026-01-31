<?php
$section_data = [
    'headline_main' => $data['partners']['headline-main'],
    'headline_sub' => $data['partners']['headline-sub']
];

$partners = $path['images']['partners'];

$tracks = [
    array_merge($partners, $partners),               // normal
    array_merge(array_reverse($partners), array_reverse($partners)) // reverse
];
?>

<section class="section partners pb-0">
    <?php include $path['partials']['section_headline']; ?>

    <div class="container">
        <div class="row">

            <?php foreach ($tracks as $i => $track): ?>
                <div class="col partners__track <?= $i === 1 ? 'partners__track--reverse' : '' ?>">
                    <?php foreach ($track as $logo): ?>
                        <div class="partners__item">
                            <img src="<?= esc($logo) ?>" alt="Partner logo">
                        </div>
                    <?php endforeach; ?>

                    <?php foreach ($track as $logo): ?>
                        <div class="partners__item">
                            <img src="<?= esc($logo) ?>" alt="Partner logo">
                        </div>
                    <?php endforeach; ?>
                </div>

            <?php endforeach; ?>

        </div>
    </div>
</section>