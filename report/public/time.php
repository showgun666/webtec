<?php
include('../config/config.php');

$title = 'En sida för tid';
include('../view/header.php');
include('../view/navbar.php');

// Set the timezone to use
date_default_timezone_set('Europe/Stockholm');

// The date of today
$today = date('Y-m-d H:i:s');

// Name of the week day
$weekday = date('l');

$week = date('W')

?>
<div class="two-col-layout">
    <main Class="main">
        <h1><?= $title ?></h1>
        <p>Dagens datum är <?= $today ?> och idag är det <?= $weekday ?>.</p>
        <p>Nu är det vecka <?= $week ?>.</p>
    </main>

    <aside class="aside">
        <p>Det ska väl stå något här med.</p>
    </aside>
</div>

<?php include('../view/footer.php') ?>