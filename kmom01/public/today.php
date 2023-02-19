<?php
include('../config/config.php');

$title = 'En sida för today';

include('../view/header.php');
// Set the timezone to use
date_default_timezone_set('Europe/Stockholm');

// The time of now
$time = date('H:i:s');

// Name of the week day
$weekday = date('l');

?>
<main>
    <p>Idag är det <span class="rainbow"><?= $weekday ?></span>.</p>
    
    <p>Nu är klockan <?= $time ?> i Sverige.</p>
</main>

<?php include('../view/footer.php') ?>
