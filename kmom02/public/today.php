<?php
include('../config/config.php');

$title = 'En sida för Today I Learned';
include('../view/header.php');
// Set the timezone to use
date_default_timezone_set('Europe/Stockholm');

// The date of today
$today = date('Y-m-d H:i:s');

// Name of the week day
$weekday = date('l');

$week = date('W');
$time = date('H:i:s');


date_default_timezone_set('Japan');
$timej = date('H:i:s');

include('../view/navbar.php');
?>

<div class="two-col-layout">
    <main Class="main">
        <p>Dagens datum är <?= $today ?> och idag är det <span Class="funky"><?= $weekday ?></span>.</p>
        <p>Nu är det vecka <?= $week ?>.</p>
        <p> detta är en liten sida som jag testar att bygga något eget med lite patchwork från genomgång, övning osv. 

            Just nu så har jag inte gjort mycket mer än att jag prövat om jag kan spara två olika tidszoner samtidigt på en sida, en för hemma i Sverige och en för hemma i Japan.

            I framtiden tänker jag att jag kan ha massa bells and whistles här, men vi får se vad det mynnar ut i!

            En otroligt lustig sak var att jag senare också upptäckte i uppgiften på kmom02 att detta var vad uppgiften var, så jag hade redan gjort en del av den uppgiften kan man säga!
        </p>
        <?php include('../view/byline.php') ?>
        <div class="crazy">
            <p>Här prövar vi att vara lite crazy.</p>
        </div>
    </main>
    

    <aside class="aside">
        <p>Nu är klockan <?= $time ?> i Sverige.</p>
        <p>Nu är klockan <?= $timej ?> i Japan.</p>
    </aside>
</div>

<?php include('../view/footer.php') ?>
