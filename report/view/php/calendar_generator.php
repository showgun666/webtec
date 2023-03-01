<?php

// hämta namnsdagar för hela året
$nameDays = getNameDaysByNameFull();
// Debug för att förstå array
// echo implode(',', $nameDays['Svea']);


// debug_array($nameDays);

// hämta aktuellt år och månad
$currentYear = date("Y");
$currentMonth = date("n");

// hämta månad och år med GET
$month = isset($_GET['month']) ? $_GET['month'] : $currentMonth;
$year = isset($_GET['year']) ? $_GET['year'] : $currentYear;
$last_day = date('z', strtotime('December 31,' . $year));

// bestäm antalet dagar på visad månad
$numDays = cal_days_in_month(CAL_GREGORIAN, $month, $year);

// hitta första och sista veckodagen i aktuell månad
$firstDayOfWeek = date("N", mktime(0, 0, 0, $month, 1, $year));
$lastDayOfWeek = date("N", mktime(0, 0, 0, $month, $numDays, $year));

// hitta första veckonummer för aktuell månad
$weekInterval = 0;
$week_num = date('W', strtotime("$year-$month-$weekInterval"));

// om månaden är 13, öka årtalet med 1 och sätt månaden till 1
if ($month == 13) {
    $year++;
    $month = 1;
}

// om månaden är 1, minska årtalet med 1 och sätt månaden till 12
if ($month == 0) {
    $year--;
    $month = 12;
}

// länk till föregående månad
$prevMonth = ($month == 1) ? 12 : $month - 1;
$prevYear = ($prevMonth == 12) ? $year - 1 : $year;
$prevLink = "photocal.php?month=$prevMonth&year=$prevYear";

// länk till nästa månad
$nextMonth = ($month == 12) ? 1 : $month + 1;
$nextYear = ($nextMonth == 1) ? $year + 1 : $year;
$nextLink = "photocal.php?month=$nextMonth&year=$nextYear";

// skapa en array med namn på månaderna
$monthNames = array(
    1 => "Januari",
    2 => "Februari",
    3 => "Mars",
    4 => "April",
    5 => "Maj",
    6 => "Juni",
    7 => "Juli",
    8 => "Augusti",
    9 => "September",
    10 => "Oktober",
    11 => "November",
    12 => "December"
);

// hämta antal dagar i föregående månad
$prevMonthDays = cal_days_in_month(CAL_GREGORIAN, $prevMonth, $prevYear);

// hämta antal dagar i nästa månad
$nextMonthDays = cal_days_in_month(CAL_GREGORIAN, $nextMonth, $nextYear);

// skriv ut kalenderbilden
echo "<img class='photocal-photo' src='img/photocal/photocal$monthNames[$month].jpg' alt='$monthNames[$month] bild'>";

// skriv ut kalendern
echo "<h1>" . $monthNames[$month] . " " . $year . "</h1>";
echo "<a href='$prevLink'>Föregående månad</a> ";
echo "<a href='$nextLink'>Nästa månad</a>";
echo "<br>";

// skapa tabell för kalendern och skriv ut rubrikerna för veckodagarna
echo "<table>";
echo "<tr>";
echo "<th>V.</th>";
echo "<th>Mån</th>";
echo "<th>Tis</th>";
echo "<th>Ons</th>";
echo "<th>Tor</th>";
echo "<th>Fre</th>";
echo "<th>Lör</th>";
echo "<th class=red>Sön</th>";
echo "</tr>";

// bestäm vilken veckodag den första dagen i månaden är
$firstDay = date("N", mktime(0, 0, 0, $month, 1, $year));

// lägg till celler för dagar före den första dagen i månaden
echo "<tr class='table-row'>";

// om första dagen i månaden inte är en måndag, lägg till en cell för veckonummer
if ($firstDay != 1) {
    echo "<td class='week-number'>$week_num</td>";
    $weekInterval += 7;
    $week_num = date('W', strtotime("$year-$month-$weekInterval"));
}

for ($i = $prevMonthDays - $firstDayOfWeek + 2; $i <= $prevMonthDays; $i++) {
    echo "<td class='outside-month date-number'>$i</td>";
}

// lägg till celler för dagarna i kalendermånaden
for ($day = 1; $day <= $numDays; $day++) {
    // bestäm veckodagen för den här dagen
    $dayOfWeek = date("N", mktime(0, 0, 0, $month, $day, $year));
    $day_number = date('z', strtotime($year . "-" . $month . "-" . $day));

    // om detta är den första dagen i en vecka, skriv ut en ny rad och lägg till en cell för veckonummer
    if ($dayOfWeek == 1) {
        echo "</tr><tr class='table-row'>";
        echo "<td class='week-number'>$week_num</td>";
        $weekInterval += 7;
        $week_num = date('W', strtotime("$year-$month-$weekInterval"));
    }

    // hämta dagens datum månad/dag
    $nameDay = date("j/n", mktime(0, 0, 0, $month, $day, $year));
    $nameDayString = "";
    // loopa genom nameDays
    foreach ($nameDays as $name => $subArray) {
        // loopa genom varje array i nameDays och konkatenera namn till nameDayString
        if ($nameDay === $subArray[1]) {
            $nameDayString .= $name . ' ';
        }
    }
    // skriv ut cellen för denna dag, om det är söndag så får den klassen red
    if ($dayOfWeek == 7) {
        echo "<td class='red'> <p class='date-number'>$day <p class='nameday'>$nameDayString</p><p class='date-content'> Day $day_number/$last_day </p></td>";
    } else {
        echo "<td><p class='date-number'>$day <p class='nameday'>$nameDayString</p> <p class='date-content'> Day $day_number/$last_day</p></td>";
    }
}
// lägg till celler för dagar efter den sista dagen i månaden
for ($i = 1; $i <= 7 - $dayOfWeek; $i++) {
    echo "<td class='outside-month date-number'>$i</td>";
}

echo "</tr>";
echo "</table>";
