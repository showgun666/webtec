<?php
include('../config/config.php');

$title = 'Namngissningsspel';

include('../view/header.php');
include('../view/navbar.php');
?>

<?php
// skapa array med key namn, value betydelse
$namnArray = getNameExplanation();

// skapa correctCount och incorrectCount i sessionen om de inte f
if (!isset($_SESSION['correctCount'])) {
    $_SESSION['correctCount'] = 0;
}

if (!isset($_SESSION['incorrectCount'])) {
    $_SESSION['incorrectCount'] = 0;
}

// slumpa fram ett namn från listan och spara det i session
$names = array_keys(getNameExplanation());
$randomIndex = array_rand($names);
$_SESSION['randomName'] = $names[$randomIndex];

// skriv ut betydelsen av det slumpade namnet
$explanations = getNameExplanation();
$randomName = $_SESSION['randomName'];
$randomExplanation = $explanations[$randomName];
?>
<main class="main">
    <h1>Hur lyder namnet som har denna betydelse?</h1>
    <p>Betydelse: <?php echo $randomExplanation; ?></p>
    <form action="../view/php/game_process.php" method="post">
        <label for="name">Namn:</label>
        <input type="text" id="name" name="name" required>
        <button type="submit">Gissa</button>
    </form>
</main>
<?php include('../view/footer.php') ?>