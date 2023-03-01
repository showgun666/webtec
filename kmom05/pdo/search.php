<?php
/*
    1 Börja med att läsa av GET arrayen och spara undan inkommande värden från querysträngen.
        1.1 Nu har vi variabler som visar om formuläret är submittat eller ej.
    2 Visa sidan, med sökformuläret, detta sker alltid, oavsett om formuläret är submittat eller ej.
    3 Kontrollera nu om formuläret var submittat.
        3.1 Om nej, gå vidare och avsluta skriptet.
        3.2 Om ja, koppla mot databasen databasen och ställ en fråga mot den, hämta resultsetet.
    4 Skriv ut resultsetet.
*/
// Include the view that shows the search form and our functions
require "functions.php";


// Get details if the form is posted or not
$doit  = $_GET['doit'] ?? null;
$query = $_GET['query'] ?? null;

// Do the search query, if the form is submitted or if there is a query
if ($doit || $query) {

    // Connect to the database
    $db = connectToDatabase(createDSN(getFilename("db.sqlite")));

    // Prepare and execute the SQL statement
    $sql = <<<EOD
    SELECT
        rowid,
        *
    FROM namnlista
    WHERE
        namn LIKE ?
        OR datum = ?
        OR namnlangd LIKE ?
        OR rowid = ?
    ;
    EOD;

    // Prepare the SQL statement so it can be executed
    $stmt = $db->prepare($sql);

    // Execute the SQL statement towards the database
    $args = ["$query%", "$query", "$query", $query];
    $stmt->execute($args);

    // Get the resultset
    $res = $stmt->fetchAll();

    // Print out the resultset
    require "view/table.php";
} else {
    // Prompt
    require "view/searchForm.php";
}