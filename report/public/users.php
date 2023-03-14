<?php

// Include the config file
include("../config/config.php");

$title = 'Användarna';

include("../view/header.php");
include("../view/navbar.php");

// Get information from database about users
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
    ;
    EOD;

// Prepare the first SQL statement so it can be executed
$stmt = $db->prepare($sql);
// Execute the first SQL statement towards the database
$stmt->execute();
// Get resultset
$res = $stmt->fetchAll();
?>

<main class="main">
    <?php echo getFlashMessage();
    unset($_SESSION["FlashMessage"]); ?>
    <h1>All users</h1>
    <p>Your resultset contains <?= sizeof($res) ?> rows.</p>
    <table>
        <thead>
            <tr>
            <th>Acronym</th>
            <th>Name</th>
            <th>Role</th>
            <th>Avatar</th>
            <th>Signature</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($res as $row) : ?>
            <tr>
                <td><a href="profile.php?user=<?php echo $row['acronym'] ?>"><?php echo $row['acronym']; ?></a></td>
                <td><?php echo $row['name']; ?></td>
                <td><?php echo $row['role']; ?></td>
                <td><?php echo $row['avatar']; ?></td>
                <td><?php echo $row['signature']; ?></td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</main>

<?php
include("../view/footer.php");
