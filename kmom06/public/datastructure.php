<?php
include('../config/config.php');
$title = 'PHP datastrukturer';
include('../view/header.php');
include('../view/navbar.php');
?>

<main class="main">
    <h1><?= $title ?></h1>

    <p> Här kommer exempelprogram för att komma igång och träna på PHP med datastrukturer, samt hur de används för att bygga webbplatser. </p>

    <?php include('../view/php/array.php') ?>
</main>


<?php include('../view/footer.php') ?>