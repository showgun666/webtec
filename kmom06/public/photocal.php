<?php
include('../config/config.php');
$title = 'Fotokalender';

include('../view/header.php');
include('../view/navbar.php');
?>

<main class="main">

    <?php include('../view/php/calendar_generator.php') ?>

</main>

<?php include('../view/footer.php') ?>
