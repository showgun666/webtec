<?php
include('../config/config.php');

$title = 'hemsida';
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
    if (isset($res["id"])) {
        $articleTitle = $res["title"];
        $articleContent = $res["content"];
        $articleAuthor = $res["author"];
        $articlePubdate = $res["pubdate"];
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
        </div>
        EOD;
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
