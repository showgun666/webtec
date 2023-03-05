<?php

// Include the config file
include("../config/config.php");

// Get incoming POST data
$acronym = $_POST["acronym"] ?? "";
$password = $_POST["password"] ?? "";

// Check if the acronym and password matches
// This should be done using the database

// Connect to the database
$db = connectToDatabase(createDSN(getFilename("user.sqlite")));
// Prepare SQL statement
$sql = <<<EOD
    SELECT
        acronym,
        name,
        password
    FROM user
    WHERE
        acronym = ?
    ;
    EOD;

// Prepare the first SQL statement so it can be executed
$stmt = $db->prepare($sql);
// Execute the first SQL statement towards the database
$stmt->execute([$acronym]);
// Get resultset
$res = $stmt->fetch();
// Get boolean for password match
$success = password_verify($password, $res['password']);

// If no not match, return to the login page
if (!$success) {
    // Do a redirect
    setFlashMessage("failure", "Login failed, wrong user or password!");
    header("Location: login.php");
    exit();
}

// The acronym and password did match, save the acronym in the session
$_SESSION["user"] = $acronym;

// Do a redirect
setFlashMessage("success", "Login successful, welcome $acronym!");
header("Location: users.php");
exit();