<?php
include('../config/config.php');

$title = 'Träna på PHP';
include('../view/header.php');
include('../view/navbar.php');
?>

</main>
<div class="two-col-layout">
    <main Class="main">
        <h1><?= $title ?></h1>
        <p>Här bygger vi kod för att träna på PHP och dess olika konstruktioner som skall hjälpa oss att generera webbsidor.</p>

        <?php include('../view/php/hello.php') ?>
        
    </main>

    <aside class="aside">
        <p>Här får vi lista ut lite saker som vi ska ha.</p>
    </aside>
</div>

<?php include('../view/footer.php') ?>