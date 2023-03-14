<?php

include('../config/config.php');

// Get incoming from post form
$acronym = $_POST["acronym"] ?? null;
$password1 = $_POST["pw1"] ?? null;
$password2 = $_POST["pw2"] ?? null;

// Check that passwords match
if ($password1 !== $password2) {
    setFlashMessage("warning", "The passwords did not match!");
    header("Location: create_user.php");
    exit();
}

// Generate a new password hash from the new password string
$hash = password_hash($password1, PASSWORD_DEFAULT);

// Connect to the database
$db = connectToDatabase(createDSN(getFilename("user.sqlite")));

// Create the SQL statement
$sql = <<<EOD
    -- Insert a new user
    INSERT INTO user
        (acronym, password, role)
    VALUES
        (?, ?, 'user')
    ;
EOD;

// Prepare the SQL statement so it can be executed
$stmt = $db->prepare($sql);

// Execute the SQL statement towards the database
$args = [$acronym, $hash];
$stmt->execute($args);

// Redirect to the login page
setFlashMessage("success", "The user was created, you can now login!");
header("Location: login.php");
exit();
