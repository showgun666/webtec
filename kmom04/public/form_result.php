<?php
include('../config/config.php');

$title = 'Formulär resultatsida';

include('../view/header.php');
include('../view/navbar.php');

$flashMessage = getFlashMessage();

?>

<main class="main">
    <h1><?= $title ?></h1>

    <?php if ($flashMessage) : ?>
        <div class="success"><?= $flashMessage ?></div>
    <?php endif; ?>

</main>

<?php include('../view/footer.php') ?>