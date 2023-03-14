<?php

// Include the config file
include("../config/config.php");

$title = 'Användare';

include("../view/header.php");
include("../view/navbar.php");

// Om inte inloggad
$user = $_SESSION["user"] ?? null;
if (!$user) {
    setFlashMessage("failure", "Only a logged in user can access the page user.php!");
    header("Location: login.php");
    exit();
} else {
    echo getFlashMessage();
    unset($_SESSION["FlashMessage"]);
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
    <h1>User profile for '<?= $res[0]['acronym'] ?>'</h1>
    <fieldset>
        <legend>User '<?= $res[0]['acronym'] ?>'</legend>
        <p>
            <label>Acronym:
                <input type="text" name="acronym" placeholder="<?= $res[0]['acronym'] ?>">
            </label>
        </p>

        <p>
            <label>Name:
                <input type="text" name="name" placeholder="<?= $res[0]['name'] ?>">
            </label>
        </p>

        <p>
            <label>Role:
                <input type="password" name="role" placeholder="<?= $res[0]['role'] ?>">
            </label>
        </p>
        <img src="<?=$res[0]['avatar']?>" alt="<?= $res[0]['acronym'] ?>avatar picture">
        <p>
            <label>Avatar:
                <input type="password" name="avatar" placeholder="<?= $res[0]['avatar'] ?>">
            </label>
        </p>

        <p>
            <label>Signature:
                <input type="password" name="signature" placeholder="<?= $res[0]['signature'] ?>">
            </label>
        </p>
    </fieldset>
</main>
<?php
include("../view/footer.php");
