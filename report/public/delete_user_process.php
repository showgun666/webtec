<?php

// Include the config file
include("../config/config.php");

// Connect to DB
$db = connectToDatabase(createDSN(getFilename("user.sqlite")));

$user = $_SESSION['user'];

// Remove user
// Prepare SQL statement
$sql = <<<EOD
    DELETE FROM user
    WHERE
        acronym = ?
    ;
    EOD;

// Prepare the first SQL statement so it can be executed
$stmt = $db->prepare($sql);
// Execute the first SQL statement towards the database
$stmt->execute([$user]);
// Logout
unset($_SESSION['user']);

// Send to login page with flashmessage
header("Location: login.php");
