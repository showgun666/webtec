<?php
include('../config/config.php');

$title = 'artikel';
include('../view/header.php');
include('../view/side.php');

// GET artikel
$articleid = $_GET['articleid'] ?? null;

// Försök hitta artikeln på hemsidan om vi har en query
if (isset($articleid)) {
    // Koppla mot databas
    $db = connectToDatabase(createDSN(getFilename("bmo.sqlite")));
    // Förbered SQL fråga
    $sql = <<<EOD
        SELECT
            *
        FROM Article
        WHERE
            id = ?
        ;
        EOD;
    // hämta resultatarray
    $res = prepareExecuteFetchOne($sql, $db, $articleid);

    // Om vi har en träff så presenterar vi innehållet
    if (isset($res["id"])) {
        $articleTitle = $res["title"];
        $articleContent = $res["content"];
        $articleAuthor = $res["author"];
        $articlePubdate = $res["pubdate"];

        // Hämta också alla objekt som hör till artikeln
        $articleTitleSplit = preg_split("/[\s,]+/", $articleTitle);
        // Tar bort två bokstäver för grammatiska ändelser
        $objectCategoryShortened = substr($articleTitleSplit[0], 0, -2);
        $objectCategory = '%' . $objectCategoryShortened . '%';
        // Förbered SQL fråga
        $sql2 = <<<EOD
        SELECT
            id,
            title,
            image
        FROM Object
        WHERE
            category LIKE ?
        ;
        EOD;
        // hämta resultatarray
        $res2 = prepareExecuteFetchAll($sql2, $db, $objectCategory);
        echo <<<EOD
        <div class="content">
            <div class="content-box content-left text-center">
                <h3 class="content-title"> $articleTitle </h3>
                <p>$articleContent</p>
                <div>
                    <a href="articles.php" class="content-left">Klicka här för att gå till artiklarna.</a>
                    <p class="text-small text-right"> $articleAuthor $articlePubdate </p>
                </div>
            </div>
        EOD;

        // Om det finns några objekt kopplade till artikeln:
        if (isset($res2[0])) {
            echo "<div class='content-box object-gallery'>";
            foreach ($res2 as $object) {
                $objectid = $object["id"];
                $objectTitle = $object["title"];
                $objectImg = $object["image"];
                echo '<a href="object.php?objectid=' . $objectid . '" class="clickable">';
                echo '<div class="object-gallery-item">';
                echo '<img src="img/550x550/' . $objectImg . '" alt="' . $objectTitle . ' image">';
                echo "<div class='object-gallery-title'>" . $objectTitle . "</div>";
                echo '</a></div>';
            }
            echo "</div>";
        }
        echo "</div>";
    } else {
        echo <<<EOD
        <div class="content">
            <div class="content-box content-left text-center">
                <h3 class="content-title"> Hoppsan, den här artikeln verkar inte finnas! </h3>
                <a href="articles.php">Klicka här för att gå till artiklarna.</a>
            </div>
        </div>
        EOD;
    }
}
?>


<?php
include('../view/footer.php');
