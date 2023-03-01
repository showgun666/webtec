<?php

/**
 * Exception handler to print out a HTML message with details on the exception,
 * useful to deal with uncaught exceptions.
 *
 * @return object as the database connection object.
 */
function connectToDatabase(string $dsn): object
{
    try {
        $db = new PDO($dsn);
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    } catch (PDOException $e) {
        echo "Failed to connect to the database using DSN:<br>'$dsn'<br>";
        throw $e;
    }

    return $db;
}

/**
 * Create DSN
 *
 * @return string the DSN
 */
function createDSN(string $adress): string
{
    // Create a DSN for the database using its filename
    $fileName = "$adress";
    $dsn = "sqlite:$fileName";

    return $dsn;
}

/**
 * Get filename
 *
 * @return string the filename
 */
function getFilename(string $adress): string
{
    // Selects file location depending on 
    $fileName = "db/$adress";
    if ($_SERVER["SERVER_NAME"] !== "www.student.bth.se") {
        $fileName = "C:\db\\$adress";
}

    return $fileName;
}
