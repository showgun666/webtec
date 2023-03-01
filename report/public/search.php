<?php

include('../config/config.php');

$title = 'Söksida';

include('../view/header.php');
include('../view/navbar.php');

// Postformulär som skickar tillbaka till denna sida
// Med GET söker jag igenom databaserna och letar efter matchningar
// Alla matchningar presenteras med klickbar länk som har name.php?query=<matchning> i search_result.php

$query = $_GET['query'] ?? null;

// Hämta resultat om vi har ett get värde namn
if ($query) {
    // Connect to the database
    $db = connectToDatabase(createDSN(getFilename("db.sqlite")));
    // Tables to be searched as array so that we can easily expand the code if we want to
    $tables = array("namnlista");
    // Result will be indexed into an array
    $res = array();

    // Prepare and execute the SQL statements and save them to the res array
    foreach ($tables as $table) {
        $sql = <<<EOD
        SELECT $table.namn
        FROM $table
        LEFT JOIN helgdagr ON $table.namn = helgdagr.datum
        LEFT JOIN helgdag ON $table.namn = helgdag.namn
        WHERE
            $table.namn LIKE ?
            AND helgdagr.datum IS NULL
            AND helgdag.namn IS NULL
        ORDER BY $table.namn
        ;
        EOD;

        $res[] = prepareExecuteFetchAll($sql, $db, '%' . $query . '%');
    }
}

?>

<main class="main">
    <h1>Sök på namn</h1>
    <p>Sökruta: </p>
    <form action="search.php" method="get">
        <input type="text" id="query" name="query" required>
        <button type="submit">Sök</button>
    </form>
    <?php if ($query) {
        include('../view/php/search_result.php');
    } ?>
</main>


<?php include('../view/footer.php');
