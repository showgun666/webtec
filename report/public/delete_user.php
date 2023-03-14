<?php

// Include the config file
include("../config/config.php");
include("../view/header.php");
include("../view/navbar.php");
?>
<main class="main">
    <h2>Are you sure you want to remove your account?</h2>
    <p>The account will be permanently removed from our database</p>
    <form method="post" action="delete_user_process.php">
        <input type="submit" name="submit" value="Yes, remove user">
    </form>
    <form method="post" action="user.php">
        <input type="submit" name="submit" value="No, take me back">
    </form>
</main>
<?php
include("../view/footer.php");
