<?php

// Search results presented

echo '<h2>Resultat</h2><p>Klicka på länkarna för att läsa mer.</p>';
foreach ($res[0] as $hit) {
    $string = $hit["namn"];
    echo "<a href='name.php?query=" . $hit["namn"] . "'>" . $string . "</a><br>";
}
