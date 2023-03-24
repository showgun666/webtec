<?php
include('../config/config.php');

$title = 'hemsida';
include('../view/header.php');
include('../view/side.php');

// GET artikel
$objectid = $_GET['objectid'] ?? null;

// Försök hitta artikeln på hemsidan om vi har en query
if (isset($objectid)) {
    // Koppla mot databas
    $db = connectToDatabase(createDSN(getFilename("bmo.sqlite")));
    // Förbered SQL fråga
    $sql = <<<EOD
        SELECT
            *
        FROM Object
        WHERE
            id = ?
        ;
        EOD;
    // hämta resultatarray
    $res = prepareExecuteFetchOne($sql, $db, $objectid);
    if (isset($res["id"])) {
        $objectid= $res["id"];
        $objectTitle = $res["title"];
        $objectText = $res["text"];
        $objectOwner = $res["owner"];
        $objectImage = $res["image"];
        echo <<<EOD
            <div class="content">
                <div class="content-box content-left text-center">
                    <h3 class="content-title"> $objectTitle </h3>
                    <img class="content-fit-img" src="img/full-size/$objectImage" alt="Bild för <?= $objectTitle ?>">
                    <p>$objectText</p>
                    <div>
                        <a href="objects.php" class="content-left">Klicka här för att gå till objektgalleriet.</a>
                        <p class="text-small text-right"> Ägare: $objectOwner </p>
                    </div>
                </div>
            </div>
        EOD;
    } else {
        echo <<<EOD
            <div class="content">
                <div class="content-box content-left text-center">
                    <h3 class="content-title"> Hoppsan, det här objektet verkar inte finnas.</h3>
                    <a href="objects.php">Klicka här för att gå till objektgalleriet.</a>
                </div>
            </div>
        EOD;
    }
}
?>



<?php
include('../view/footer.php');
