<?php

include('../config/config.php');

// Get incoming from post form
$password1 = $_POST["pw1"] ?? null;
$password2 = $_POST["pw2"] ?? null;

// Get the acronym from the session
$user = $_SESSION["user"];

// Check that passwords match
if ($password1 !== $password2) {
    setFlashMessage("failure", "The passwords you have given do not match! Try again.");
    header("Location: change_password.php");
    exit();
}

// Generate a new password hash from the new password string
$hash = password_hash($password1, PASSWORD_DEFAULT);

// Connect to the database
$db = connectToDatabase(createDSN(getFilename("user.sqlite")));

// Prepare SQL statement
$sql = <<<EOD
    UPDATE user SET
    password = ?
    WHERE
    acronym = ?
    ;
    EOD;

// Prepare the first SQL statement so it can be executed
$stmt = $db->prepare($sql);

// Execute the first SQL statement towards the database
$stmt->execute([$hash, $user]);

// Redirect to the user page
setFlashMessage("success", "The password was changed in the database!");
header("Location: profile.php?user=$user");
exit();
