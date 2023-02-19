<?php
include('../config/config.php');

$title = 'En sida för today';

include('../view/header.php');
// Set the timezone to use
date_default_timezone_set('Europe/Stockholm');

// The time of now
$time = date('H:i:s');

?>
<main>
    <p>Nu är klockan <?= $time ?> i Sverige.</p>
</main>

<?php include('../view/footer.php') ?>
