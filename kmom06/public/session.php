<?php
include('../config/config.php');

$title = 'Sessionen';

include('../view/header.php');
include('../view/navbar.php');
?>

<main class="main">
    <h1><?= $title ?></h1>

    <p>För att visa detaljer om sessionen och felsökning.</p>

    <a href="session_destroy.php"> Förstör sessionen </a>
    <br>
    <a href="session_write.php"> Skriv till sessionen </a>

    <?php include('../view/php/session_display.php') ?>
</main>

<?php include('../view/footer.php') ?>