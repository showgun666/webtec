<?php

// Include the config file
include("../config/config.php");

$user = $_SESSION["user"] ?? null;
if (!$user) {
    setFlashMessage("failure", "Only a logged in user can access the page user.php!");
    header("Location: login.php");
    exit();
}
