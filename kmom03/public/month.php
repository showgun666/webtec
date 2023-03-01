<?php
include('../config/config.php');

$title = 'Om kurs och webbplatsen';
include('../view/header.php');
include('../view/navbar.php');

?>
<?php
    if(isset($_GET['date'])){
        // Hämta valt datum
        $date = $_GET['date'];
        $month = date('m', strtotime($date));
        $month_name = date('F', strtotime($date));
        $year = date('Y', strtotime($date));
        $day_number = date('z', strtotime($date));
        $last_day = date('z', strtotime('December 31,'.$year));
    } else {
        // Hämta nuvarande månad och år
        $month = date('m');
        $month_name = date('F');
        $year = date('Y');
        $last_day = date('z', strtotime('December 31,'.$year));
    }

    // Hämta antalet dagar i månaden
    $num_days = cal_days_in_month(CAL_GREGORIAN, $month, $year);
?>

<main Class="main">
    <form class="calendar" action="<?php echo $_SERVER['PHP_SELF'];?>" method="get">
        <label for="date">Choose a date:</label>
        <input type="date" id="date" name="date">
        <button type="submit">Submit</button>
    </form>
    <div class="calendar">
        <h1><?= $month_name ?> <?= $year ?></h1>
        <table>
            <thead>
                <tr>
                <th>Datum</th>
                <th>Veckodag</th>
                <th class="table-wide">Beskrivning</th>
                <th>Vecka</th>
                </tr>
            </thead>
            <tbody>
                <?php
                // Loop:a genom alla dagar i månaden
                for ($day = 1; $day <= $num_days; $day++) {
                    // Hämta veckodagen som text
                    $day_name = date('l', strtotime("$year-$month-$day"));

                    // Hämta dagnummer som text
                    $day_number = date('z', strtotime("$year-$month-$day"));

                    // Sätt klassen "red" på söndagar
                    $class = ($day_name == 'Sunday') ? 'red' : '';

                    // Sätt klassen "bold" på måndagar
                    if ($day_name == 'Monday') {
                        $class .= ' bold';
                    }
                    // Hämta veckonummer för måndagar
                    if ($day == 1) {
                        $week_num = date('W', strtotime("$year-$month-$day"));
                    } elseif ($day_name == 'Monday') {
                        $week_num = date('W', strtotime("$year-$month-$day"));
                    } else {
                        $week_num = '';
                    }

                    // Skriv ut en rad i tabellen för varje dag
                    echo "<tr>
                            <td class=\"$class\">$day</td>
                            <td class=\"$class\">$day_name</td>
                            <td class=\"$class calendar-left-small\">Day $day_number/$last_day.</td>
                            <td class=\"$class bold\">$week_num</td>
                        </tr>";
                }
                ?>
            </tbody>
        </table>
        <div class="month-buttons">
            <div class="month-button-left">
                <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="get">
                    <input type="hidden" name="date" value="<?php echo date('Y-m', strtotime('-1 month', strtotime($year.'-'.$month.'-01'))); ?>">
                    <button type="submit">Previous Month</button>
                </form>
            </div>
            <div class="month-button-right">
                <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="get">
                    <input type="hidden" name="date" value="<?php echo date('Y-m', strtotime('+1 month', strtotime($year.'-'.$month.'+01'))); ?>">
                    <button type="submit">Next Month</button>
                </form>
            </div>
        </div>
    </div>
</main>
<?php include('../view/footer.php') ?>