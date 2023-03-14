<?php

include('../config/config.php');
include('../view/header.php');
include('../view/navbar.php');
?>

<main class="main">
    <?= getFlashMessage() ?>
    <fieldset>
        <legend>Create user</legend>
        <form method="post" action="create_user_process.php">
            <label>Enter Acronym:</label><br>
            <input type="text" name="acronym" id="acronym"><br>
            <label>Enter password:</label><br>
            <input type="password" name="pw1" id="pw1"><br>
            <label>Enter password again:</label><br>
            <input type="password" name="pw2" id="pw2"><br>
            <input type="submit" name="submit" value="submit">
        </form>
    </fieldset>
</main>

<?php
include('../view/footer.php');