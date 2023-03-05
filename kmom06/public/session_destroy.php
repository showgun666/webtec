<?php

include('../config/config.php');

// Destroy the session.
destroySession();

// Redirect to the session page
header("Location: session.php");
exit();
