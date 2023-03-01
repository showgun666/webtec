<?php

include('../config/config.php');

$message = "Hej världen!";

?>

<h2>Hello world</h2>

<p>
    PHP säger: <strong><?= $message ?></strong>
</p>

<h2>Variabler</h2>

<?php
$name = "Mikael";
$city = "Bankeryd";
// Integer
$age = 42;
$birthDay = 7;
$birthMonth = 3;
// Float/double
$radius = 7.0;
$pi = 3.14159;
$circumference = 2 * $radius * $pi;
$area = $pi * $radius * $radius;
// Extract the year only
$currentYear = date('Y');
// Calculate the birth year from the age
$birthYear = $currentYear - $age;
// Format number for output
$formattedRadius = number_format($radius, 1);
$formattedCircumference = number_format($circumference, 2);
$formattedArea = number_format($area, 2);
// Using rot13 function
$krypteradText = "Xhqbf! Qh svknqr rkgenhcctvsgra!";
$avkrypteradText = str_rot13($krypteradText);
// Extract details about the day
$dayNum = date('N');
$dayStr = date('l');
// Set the message with a default text
$message = "Today it is $dayStr, it is NOT yet Friday!!! Carpe Diem.";
// Check if it is friday, day 5 in the week
// How many days left to Friday?
$daysLeft = 0;
if ($dayNum < 5) {
    $daysLeft = 5 - $dayNum;
    $message = "$message It is $daysLeft days left to Friday, hang on...";
} elseif ($dayNum > 5) {
    $daysLeft = 7 - $dayNum + 5;
    $message = "$message It was just Friday but it will come again in $daysLeft days.";
} else {
    $message = "$message Horrayyy Friday!!!";
}
// Prepare variables before loop
$sum = 0;
$number = 1;
// Do the loop and sum odd numbers
while ($number <= 42) {
    if ($number % 2 == 0) {
        $sum += $number;
    }
    $number ++;
}

// Set up more time variables
$nowDate = date('Y-m-d');
$nowWeek = date('Y-m-d', strtotime('this week'));
$nowDay = date('l');
$nowTime = date('g:i A');
// Get the start and end dates of the current week
$startDate = date('Y-m-d', strtotime('this week'));
$endDate = date('Y-m-d', strtotime('this week +6 days'));
// Loop through each day of the week and output the weekday and date
$currentDate = $startDate;
$message2 = "";
while (strtotime($currentDate) <= strtotime($endDate)) {
    if ($nowDate == $currentDate) {
        $message2 .= "<li>".date('l', strtotime($currentDate)).", ".date('F j, Y', strtotime($currentDate))." (today)"."</li>"."<br>";
    } else {
        $message2 .= "<li>".date('l', strtotime($currentDate)).", ".date('F j, Y', strtotime($currentDate))."</li>"."<br>";
    }
    $currentDate = date('Y-m-d', strtotime($currentDate . ' +1 day'));
}
// Extract details about the date, if it is a valid date
$date = $_GET['date'] ?? null;

// Extract details about the date, if it is a valid date
$timestamp = null;
if ($date) {
    $timestamp = strtotime($date);
}

// Get incoming arguments from querystring
$date = $_GET['date'] ?? null;

$dateStr = "";
if ($date) {
    $dateStr = htmlentities($date);
}

if ($timestamp) {
    $dateStr = date('Y-m-d', $timestamp);
    $monthStr = date('F', $timestamp);
    $monthDaysStr = date('t', $timestamp);
    $weekStr = date('W', $timestamp);
    $dayStr = date('l', $timestamp);   
}
?>

<p>
    Jag har hört talas om <?= $name ?> som bor i <?= $city ?>. Vet du vem det är?
</p> 

<p>
    Jag föddes den <?= $birthDay ?>/<?= $birthMonth ?> och jag är <?= $age ?> år gammal. Kan du räkna ut vilket år jag föddes?
</p>
<p>
    I år är det <?= $currentYear ?> och om du är <?= $age ?> år i år så föddes du i år <?= $birthYear ?>
</p>

<p>
    Cirkelns radie är <?= $radius ?> enheter, dess omkrets är <?= $circumference ?> enheter och dess area är <?= $area ?> enheter i kvadrat.
</p>

<p>
    Cirkelns radie är <?= $formattedRadius ?> enheter, dess omkrets är <?= $formattedCircumference ?> enheter och dess area är <?= $formattedArea ?> enheter i kvadrat (formatterad utskrift).
</p>

<p>
    Den krypterade texten är "<?= $krypteradText ?>".
</p>

<p>
    När den avkrypterats lyder den "<?= $avkrypteradText ?>".
</p>

<h2>Villkor med if</h2>

<p><?= $message ?></p> 

<h2>Loopar med for och while</h2>

<p>
    Summan av alla jämna siffror mellan 0 och 42 är <?= $sum ?>.
</p> 

<h2>Utmaning med veckodagar och tid</h2>
<p>
    Dagens datum är <?= $nowDay ?>, <?= $nowDate ?>, klockan är <?= $nowTime ?> och vi befinner oss i vecka <?= $nowWeek ?>.<br><br>
</p>
<p>
    <?= $message2 ?>
</p>

<h2>Skicka parameter till webbsidan med querystring och GET</h2>

<?php if ($date) : ?>
    <p>
        The incoming date argument is <code><?= htmlentities($date) ?></code>.
    </p>

    <?php if ($timestamp) : ?>
        <p>
            The date is <?= $dateStr ?> and that is/was a <?= $dayStr ?> in the 
            week <?= $weekStr ?> in the month <?= $monthStr ?> that has 
            <?= $monthDaysStr ?> days.
        </p>
    <?php else : ?>
        <p>The incoming date is not a valid date.</p>
    <?php endif; ?>

<?php else : ?>
    <p>
        You did not send a date through the querystring, do that by adding this 
        to the url: <code>?date=2022-08-23</code>
    </p>
<?php endif; ?>

<h2>HTML formulär med GET</h2>

<form action="" method="get">
    <p>
        Datum:
        <input type="date" value="<?= $dateStr ?>" name="date" placeholder="Skriv in ett datum">
    </p>

    <p>
        <input type="submit" value="Skicka" name="doit">
        <input type="reset" value="Rensa">
    </p>

    <output>
        <?php if ($dateStr) : ?>
            <p>You have submitted the date: <code><?= $dateStr ?></code>.</p>
        <?php endif; ?>
    </output>
</form>

<p>This is how you can debug the content of the incoming <code>$_GET</code> variable.</p>
<pre><?= var_dump($_GET) ?></pre>

<h2>Detaljer om requesten med SERVER</h2>

<table>
    <tr>
        <th>Nyckel</th>
        <th>Värde</th>
    </tr>

    <tr>
        <td>Rad 1, kolumn 1</td>
        <td>Rad 1, kolumn 2</td>
    </tr>

    <tr>
        <td>Rad 2, kolumn 1</td>
        <td>Rad 2, kolumn 2</td>
    </tr>
</table>

<p>This is how you can debug the content of the incoming <code>$_SERVER</code> variable.</p>
<pre><?= var_dump($_SERVER) ?></pre>
