<?php
require 'includes/function.php';

$data = require './config/site.php';
?>

<?php include 'includes/head.php'; ?>
<?php include 'includes/header.php'; ?>

<main>
    <?php include 'sections/hero.php'; ?>
    <?php include 'sections/product.php'; ?>
    <?php include 'sections/uses.php'; ?>
    <?php include 'sections/cta.php'; ?>
</main>

<?php include 'includes/footer.php'; ?>