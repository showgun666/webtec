<?php
include('../config/config.php');

$title = 'Om kurs och webbplatsen';
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
    $now = new DateTime();
    $friday = new DateTime('next Friday');
    $diff = $now->diff($friday);
    $message .= '<main Class="main">';
    $message .= '<p class="countdown">Bara ' . $diff->days . ' dagar kvar till fredag...</p>';
    $message .= '</main>';
}
?>

<?= $message ?>

<?php include('../view/footer.php') ?>