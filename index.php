<?php
require './includes/function.php';

$data = require './config/site.php';
$path = require './config/paths.php';
?>

<?php include $path['includes']['head'] ?>
<?php include $path['includes']['header'] ?>

<main>
    <?php include $path['sections']['hero']; ?>
    <?php include $path['sections']['uses']; ?>
    <?php include $path['sections']['product']; ?>
    <?php include $path['sections']['cta']; ?>
</main>

<?php include $path['includes']['footer'] ?>