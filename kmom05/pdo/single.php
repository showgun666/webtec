<?php

require("functions.php");
// Get details from the query string
// Exit the script if the id is missing
// Connect to the database
// Create the SQL statement
// Prepare the SQL statement so it can be executed
// Execute the SQL statement towards the database
// Get the resultset
// Include the view that shows the row

// Get details from the query string
$id = $_GET['id'] ?? null;
$name = $_GET['name'] ?? null;

// Exit the script if the id is missing
if (!$id && !$name) {
    die("You have accessed this page without entering an id or name through the query string.");
}
if ($id) {
    $question = "rowid";
    $argument = $id;
} else {
    $question = "namn";
    $argument = $name;
}
// Connect to the database
$db = connectToDatabase(createDSN(getFilename("db.sqlite")));

// Create the SQL statement
$sql = <<<EOD
SELECT
    rowid,
    *
FROM namnlista
WHERE
    $question = ?
;
EOD;

// Prepare the SQL statement so it can be executed
$stmt = $db->prepare($sql);

// Execute the SQL statement towards the database
$args = [$argument];
$stmt->execute($args);

// Get the resultset and sanitize it
$res = $stmt->fetch();
$id         = htmlentities($res['rowid'] ?? "");
$name       = htmlentities($res['namn'] ?? "");
$date       = htmlentities($res['datum'] ?? "");
$nameLength = htmlentities($res['namnlangd'] ?? "");
$checked = $nameLength === "Ja" ? 'Checked="Checked"' : null;
?>

<h1>Show specific row from database</h1>

<form>
    <fieldset>
        <legend>Row with id '<?= $id ?>'</legend>

        <p>
            <label>Id:
                <input type="text" name="id" value="<?= $id ?>" readonly="readonly">
            </label>
        </p>

        <p>
            <label>Name:
                <input type="text" name="name" value="<?= $name ?>" readonly="readonly">
            </label>
        </p>

        <p>
            <label>Date:
                <input type="text" name="date" value="<?= $date ?>" readonly="readonly">
            </label>
        </p>

        <p>
            <label>Namnlängd:
                <input type="checkbox" name="nameLength" value="Ja" <?= $checked ?> disabled="disabled">
            </label>
        </p>
    </fieldset>
</form>
