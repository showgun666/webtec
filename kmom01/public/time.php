<?php
include('../config/config.php');

$title = 'En sida för tid';

include('../view/header.php');

// Set the timezone to use
date_default_timezone_set('Europe/Stockholm');

// The date of today
$today = date('Y-m-d H:i:s');

// Name of the week day
$weekday = date('l');

$week = date('W')

?>

<p>Dagens datum är <?= $today ?> och idag är det <?= $weekday ?>.</p>
<p>Nu är det vecka <?= $week ?>.</p>


<?php include('../view/footer.php') ?>