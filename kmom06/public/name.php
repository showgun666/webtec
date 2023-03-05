<?php

include('../config/config.php');

$title = 'Namnsida';

include('../view/header.php');
include('../view/navbar.php');
?>
<main Class="main">
    <?php
    // Söker efter ETT namn i båda tabellerna och visar detaljer om det namnet
    // Sidkontrollern nås via name.php, och då visas ett meddelande "Du måste fylla i querysträngen."
    // name.php?query=Mikael visar detaljer om namnet och presenterar dem. Finns det inga detaljer om namnet visas inga felutskrifter
    // Istället visas "Ingen information om namnet kunde hittas."
    // Hämta detaljer från flera tabeller i databasen om valt namn.

    // Get details if the form is posted or not
    $query = $_GET['query'] ?? null;
    // Do the search query, if the form is submitted or if there is a query
    if ($query) {
        // Connect to the database
        $db = connectToDatabase(createDSN(getFilename("db.sqlite")));

        $tables = array("namnlista", "namnbetydelse", "fornamn_k_antal", "fornamn_m_antal");
        $res = array();

        // Prepare and execute the SQL statements and save them to the res array
        foreach ($tables as $table) {
            $sql = <<<EOD
            SELECT
                rowid,
                *
            FROM $table
            WHERE
                namn LIKE ?
            LIMIT 1
            ;
            EOD;

            $res[] = prepareExecuteFetchOne($sql, $db, $query);
        }

        // Print out the resultset if we have result, else say that there is no info
        if ($res[0] || $res[1]) {
            require "../view/php/name_present.php";
        } else {
            echo "<h2>Ingen information om namnet kunde hittas.</h2>";
        }
    } else {
        echo "<h2 class='failure'>Du måste fylla i querysträngen.</h2>";
    }
    ?>
</main>

<?php include('../view/footer.php');
