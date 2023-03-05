<?php

// Visa resultat
$namn = htmlentities($res[0]['namn'] ?? "");
$datum = htmlentities($res[0]['datum'] ?? "");
$women = htmlentities($res[2]['antal'] ?? 0);
$men = htmlentities($res[3]['antal'] ?? 0);

if ($res[1]) {
    $betydelse = htmlentities($res[1]['betydelse'] ?? "");
} else {
    $betydelse = "Ingen information om namnets betydelse kunde hittas.";
}
?>

<fieldset>
    <legend> <?= $namn  ?> </legend>
    <p>Namnsdag: <?= $datum ?> <p>
    <p>Betydelse: <?= $betydelse ?> <p>
    <p>Popularitet: I Sverige finns det <?= $women ?> kvinnor och <?= $men ?> män som heter <?= $namn  ?>.<p>
</fieldset>
