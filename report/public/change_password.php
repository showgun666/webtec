<?php

include('../config/config.php');

$title = 'Byt lösenord';

include('../view/header.php');
include('../view/navbar.php');

// Om inte inloggad
$user = $_SESSION["user"] ?? null;
if (!$user) {
    setFlashMessage("failure", "Only a logged in user can change their password!");
    header("Location: login.php");
    exit();
}

// Get information from database about user
// Connect to the database
$db = connectToDatabase(createDSN(getFilename("user.sqlite")));
// Prepare SQL statement
$sql = <<<EOD
    SELECT
        acronym,
        name,
        role,
        avatar,
        signature
    FROM user
    WHERE
        acronym = ?
    ;
    EOD;

// Prepare the first SQL statement so it can be executed
$stmt = $db->prepare($sql);
// Execute the first SQL statement towards the database
$stmt->execute([$user]);
// Get resultset
$res = $stmt->fetchAll();
?>

<main class="main">
    <?php
    getFlashMessage();
    unset($_SESSION["FlashMessage"]);
    ?>
    <fieldset>
        <legend>Change password for '<?= $res[0]['acronym'] ?>'</legend>

        <form method="post" action="change_password_process.php">
            <label>Enter new password:</label><br>
            <input type="password" name="pw1" id="pw1"><br>
            <label>Enter new password again:</label><br>
            <input type="password" name="pw2" id="pw2"><br>
            <input type="submit" name="submit" value="submit">
        </form>
    </fieldset>
</main>

<?php include('../view/footer.php');
