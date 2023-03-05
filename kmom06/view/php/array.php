<?php

$mikael = [
    "Mikael",
    "Roos",
    1968,
    "Teacher",
    78.2
];

$items = count($mikael);

$weekday = [
    "Måndag",
    "Tisdag",
    "Onsdag",
    "Torsdag",
    "Fredag",
    "Lördag",
    "Söndag"
];
$dayNumToday = date("N");
$dayToday = $weekday[$dayNumToday - 1];

$monthName = [];
$monthName[1] = "Januari";
$monthName[] = "Februari";
$monthName[] = "Mars";
$monthName[] = "April";
$monthName[] = "Maj";
$monthName[] = "Juni";
$monthName[] = "Juli";
$monthName[] = "Augusti";
$monthName[] = "September";
$monthName[] = "Oktober";
$monthName[] = "November";
$monthName[] = "December";
$monthNames = implode(", ", $monthName);
$monthNumToday = date("n");
$monthToday = $monthName[$monthNumToday];

?>

<h2>Array som datastrukturer</h2>

<p>Nu testar vi en array.</p>

<pre><?= print_r($mikael, true) ?></pre>

<pre><?= var_dump($mikael) ?></pre>

<p>I arrayen mikael så finns det <?= $items ?> index med värden </p>

<pre><?= array_key_exists(0, $mikael) ?></pre>
<pre><?= array_key_exists(10, $mikael) ?></pre>

<p>Här är en array med veckodagar på position 0 till 6.</p>

<pre><?= print_r($weekday, true) ?></pre>

<p>Idag är det veckodag: '<?= $dayToday ?>' (veckodag nummer <?= $dayNumToday ?>).</p>

<p>Vi har en array med månadernas namn, vi kan använda "implode()" på den för att skriva ut den som en sträng.</p>

<p><?= $monthNames ?>.</p>

<p>Idag är det månad: '<?= $monthToday ?>' (månadens nummer <?= $monthNumToday ?>).</p>
<h2>Foreach</h2>
<p>Här kommer texten uppdelad i dess beståndsdelar:</p><br>
<?php
$sentence = "Mumintrollet bor i det blå huset.";
$words = explode(" ", $sentence);

echo "\"" . $sentence . "\"" . "<br><br><br>";
foreach ($words as $index => $word) {
    $word = rtrim($word, '.');
    $length = strlen($word);
    echo "<li>'" . $word . "'" . " med " . $length . " bokstäver på position " . $index . "." . "</li><br>";
}
?>

<?php
$paintings = [
    "Jean-Léon Gérôme" => "img/The_leap_of_Marcus_Curtius_(1850-55),_by_Jean-Léon_Gérôme.jpg",
    "Justus Sustermans" => "img/BMVB1452-Justus_Sustermans-La_familia_de_Darius_davant_Alexandre_el_Gran.jpeg",
    "Matthias Laurenz Gräff" => "img/Matthias_Laurenz_Gräff,__Traum_Österreich_-_Vorstellung_und_Wirklichkeit_.jpg",
    "Sebastiano Ricci" => "img/Sebastiano_Ricci_-_A_Recusa_de_Arquimedes.jpg",
];

$paintings["Niels Simonsen"] = "img/Episoden_af_Træfning_ved_Sankelmark,_den_6._Februar.jpg";
$paintings["Gustave Moreau"] = "img/Moreau_-_Thomyris_et_Cyrus,_Inv._13978.jpg";

?>

<h2>Key/value array: Gissa artisten</h2>

<p>Här är ett galleri med historiska målningar. Försök gissa vilken konstnär eller 
    målning det är. När du håller musen över bilden så framträder svaret.</p>

<div class="gallery">
<?php foreach ($paintings as $key => $value) : ?>
    <img src="<?= $value ?>" title="<?= $key . " " . $value ?>" alt="<?= $value ?>">
<?php endforeach; ?>
</div>

<?php
$mikael = [
    "name" => "Mikael",
    "acronym" => "mos",
    "age" => 42
];

$marie = [
    "name" => "Marie",
    "acronym" => "mgr",
    "age" => 42
];

$teacherTeam = [$mikael, $marie];

// Outputs "Mikael"
echo $teacherTeam[0]["name"];

// Outputs "Marie"
echo $teacherTeam[1]["name"];

$flashMessage = getFlashMessage();
?>

<h2> HTML formulär med POST </h2>
<?php if ($flashMessage) : ?>
        <div class="failure"><?= $flashMessage ?></div>
<?php endif; ?>

<form method="post" action="form_process.php">
    <fieldset>
        <legend>Anmäl dig!</legend>

        <p>
            <label>Namn:<br>
                <input type="text" name="name" placeholder="Skriv in ditt namn...">
            </label>
        </p>

        <p>
            <label>Adress:<br>
                <textarea name="address" placeholder="Skriv in din adress..."></textarea>
            </label>
        </p>

        <p>
            <label>
                Jag samtycker till allt, på heder och samvete.
                <input type="checkbox" name="check">
            </label>
        </p>

        <p>
            <input type="submit" value="Skicka" name="doit">
            <input type="reset" value="Rensa">
        </p>
    </fieldset>
</form>
