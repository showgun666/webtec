<?php

require("functions.php");

$fileName = "db/db.sqlite";
if ($_SERVER["SERVER_NAME"] !== "www.student.bth.se") {
    $fileName = "C:\db\db.sqlite";
}

// Create a DSN for the database using its filename
$dsn = createDSN("$fileName");

// Open the database file and set some attributes on the interface
//  and catch the exception if it fails.
//try {
//    $db = new PDO($dsn);
//    $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
//    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//} catch (PDOException $e) {
//    echo "Failed to connect to the database using DSN:<br>'$dsn'<br>";
//    throw $e;
//}

// Connect to the database
$db = connectToDatabase($dsn);

// Print out the success
echo "<p>The database at '$dsn' is now connected.<p>Dumping the database connection:<pre>";
var_dump($db);

