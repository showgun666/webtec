<?php
include('../config/config.php');

$title = 'Game Results';
include('../view/header.php');
include('../view/navbar.php');

// sämta resultatet från session
$guessedName = $_SESSION['guessedName'];
$correctName = $_SESSION['randomName'];
$result = $_SESSION['result'];
$correctCount = $_SESSION['correctCount'] ?? 0;
$incorrectCount = $_SESSION['incorrectCount'] ?? 0;
$_SESSION['pageThreeName'] = $_SESSION['randomName'];
// slumpa fram ett nytt namn och rensa sessionen om användaren går tillbaka till indexsidan
if (isset($_POST['playAgain'])) {
    header('Location: guessname.php');
    exit();
}
?>
<main>
    <h1><?php echo $result; ?></h1>
    <p>Du gissade på: <?php echo $guessedName; ?></p>
    <p>Rätt svar var: <?php echo $correctName; ?></p>
    <br>
    <p>Antal rätt: <?php echo $correctCount?><br><p>
    <p>Antal fel: <?php echo $incorrectCount?><br><p>
    <form action="" method="post">
        <button type="submit" name="playAgain">Spela igen</button>
    </form>
</main>
<pre><?= var_dump($_SESSION) ?></pre>

<?php include('../view/footer.php') ?>