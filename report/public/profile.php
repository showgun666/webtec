<?php

// Include the config file
include("../config/config.php");

$title = 'Profil';
include("../view/header.php");
include("../view/navbar.php");

// Om inte inloggad
$user = $_SESSION["user"] ?? null;
if (!$user) {
    setFlashMessage("failure", "Only a logged in user can access the page user.php!");
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
    echo getFlashMessage();
    unset($_SESSION["FlashMessage"]);
    ?>
    <h1>User profile for '<?= $res[0]['acronym'] ?>'</h1>
    <fieldset>
        <legend>User '<?= $res[0]['acronym'] ?>'</legend>
        <form method="post" action="change_profile.php">
            <p>
                <label>Acronym:
                    <?= $res[0]['acronym'] ?>
                </label>
            </p>
            <p>
                <label>Name:
                    <input type="text" name="name" id="name" placeholder="<?= $res[0]['name'] ?>">
                </label>
            </p>
            <p>
                <label>Role:
                    <input type="text" name="role" id="role" placeholder="<?= $res[0]['role'] ?>">
                </label>
            </p>
            <img src="<?=$res[0]['avatar']?>" alt="<?= $res[0]['acronym'] ?> avatar picture">
            <p>
                <label>Avatar:
                <input type="text" name="avatar" id="avatar" placeholder="<?= $res[0]['avatar'] ?>">
                </label>
            </p>
            <p>
                <label>Signature:
                    <input type="text" name="signature" id="signature" placeholder="<?= $res[0]['signature'] ?>">
                </label>
                <br><br><input type="submit" name="submit" value="submit changes">
            </p>
        </form>
    </fieldset>
    <a href="change_password.php">Change password</a>
    <a href="delete_user.php">Delete account</a>
</main>
<?php
include("../view/footer.php");
