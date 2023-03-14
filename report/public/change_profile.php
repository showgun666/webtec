<?php

// Include the config file
include("../config/config.php");

// Get post values
$name = $_POST["name"] ?? null;
$role = $_POST["role"] ?? null;
$avatar = $_POST["avatar"] ?? null;
$signature = $_POST["signature"] ?? null;

// Get session value user
$user = $_SESSION["user"] ?? null;
var_dump($_POST);
// If not logged in, kick out
if (!$user) {
    setFlashMessage("failure", "You must be logged in to change password");
    header("Location: login.php");
    exit();
}

// If !value send back to profile.php
if (!$name && !$role && !$avatar && !$signature) {
    setFlashMessage("failure", "No changes have been made");
    header("Location: profile.php?user=$user");
    exit();
}

// Connect to db
$db = connectToDatabase(createDSN(getFilename("user.sqlite")));

if ($name) {
    // Prepare SQL statement
    $sql = <<<EOD
    UPDATE user SET
    name = ?
    WHERE
    acronym = ?
    ;
    EOD;
    // Prepare the current SQL statement so it can be executed
    $stmt = $db->prepare($sql);
    // Execute the current SQL statement towards the database
    $stmt->execute([$name, $user]);
}

if ($role) {
    // Prepare SQL statement
    $sql = <<<EOD
    UPDATE user SET
    role = ?
    WHERE
    acronym = ?
    ;
    EOD;
    // Prepare the current SQL statement so it can be executed
    $stmt = $db->prepare($sql);
    // Execute the current SQL statement towards the database
    $stmt->execute([$role, $user]);
}

if ($avatar) {
    // Prepare SQL statement
    $sql = <<<EOD
    UPDATE user SET
    avatar = ?
    WHERE
    acronym = ?
    ;
    EOD;
    // Prepare the current SQL statement so it can be executed
    $stmt = $db->prepare($sql);
    // Execute the current SQL statement towards the database
    $stmt->execute([$avatar, $user]);
}

if ($signature) {
    // Prepare SQL statement
    $sql = <<<EOD
    UPDATE user SET
    signature = ?
    WHERE
    acronym = ?
    ;
    EOD;
    // Prepare the current SQL statement so it can be executed
    $stmt = $db->prepare($sql);
    // Execute the current SQL statement towards the database
    $stmt->execute([$signature, $user]);
}

/*
// Prepare SQL statement
$sql = <<<EOD
    UPDATE user SET
    ? = ?
    WHERE
    acronym = ?
    ;
    EOD;
foreach ($_POST as $key => $value) {
    // If key is submit or there is no value, continue to next iteration
    if ($key === "submit" || !$value) {
        continue;
    }
    // Prepare the current SQL statement so it can be executed
    $stmt = $db->prepare($sql);
    // Execute the current SQL statement towards the database
    $stmt->execute([$key, $value, $user]);
} */

setFlashMessage("success", "Changes have been successfully applied!");
header("Location: profile.php?user=$user");
exit();
