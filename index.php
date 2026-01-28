<?php
$show_outline = false; // Set to false to hide all outlines
?>
<?php
require './includes/function.php';
require './config/variables.php';

$path = require './config/paths.php';
$data = require './config/site.php';
?>

<?php include $path['includes']['head'] ?>
<?php include $path['includes']['header'] ?>

<main>
    <?php include $path['sections']['hero']; ?>
    <?php include $path['sections']['uses']; ?>
    <?php include $path['sections']['product']; ?>
    <?php include $path['sections']['partners']; ?>
    <?php include $path['sections']['newsteller']; ?>
    <?php include $path['sections']['cta']; ?>
    <?php include $path['sections']['service']; ?>
</main>

<?php include $path['includes']['footer'] ?>