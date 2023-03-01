<?php

include('../../config/config.php');

// sontrollera om användaren gissade rätt namn med boolean
$guessedName = $_POST['name'];
$correctName = $_SESSION['randomName'];
$isCorrect = ($guessedName === $correctName);

// spara resultatet i session och flashmeddelande samt uppdatera antal rätt resp. fel
if ($isCorrect) {
    $_SESSION['result'] = 'Rätt!';
    $_SESSION['correctCount']++;
} else {
    $_SESSION['result'] = 'Fel!';
    $_SESSION['incorrectCount']++;
}
$_SESSION['guessedName'] = $guessedName;

// sedirecta till resultatssidan
header('Location: ../../public/game_result.php');
exit();
