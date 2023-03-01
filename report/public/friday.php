<?php
include('../config/config.php');

$title = 'Friday';
include('../view/header.php');
include('../view/navbar.php');
?>
<?php
$message = "";
$date = isset($_GET['date']) ? $_GET['date'] : date('Y-m-d');

if (date('l', strtotime($date)) == 'Friday') {
    $message .= '<main Class="main friday-background">';
    $message .= '<h1 class="friday-declaration ">CRAIZI FREDAG</h1>';
    $message .= '<img class="friday-image" src="https://i.imgur.com/OVCWnaL.jpeg" alt="Friday">';
    $message .= '<p class="friday-text">WOOHOO det är FREDAAAG!</p>';
    $message .= '</main>';
} else {
    $dateTime = new DateTime($date);
    $nextFriday = new DateTime('next Friday', $dateTime->getTimezone());
    $diff = $dateTime->diff($nextFriday);
    $daysToFriday = (string)$diff->days % 7;
    $message .= '<main class="main">';
    $message .= '<p class="countdown">Bara ' . $daysToFriday . ' dagar kvar till fredag...</p>';
    $message .= '</main>';
}
?>
<?= $message ?>

<?php include('../view/footer.php') ?>
<?php // För att den skulle validera utan att det blir fatal error
