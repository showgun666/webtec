<?php

include('../config/config.php');

$title = 'Logout sida';

unset($_SESSION["user"]);
setFlashMessage("success", "Logout made successfully.");
header("Location: login.php");
exit();
