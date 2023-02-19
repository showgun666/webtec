<?php
include('../config/config.php');

$title = 'Min sida om mig';

include('../view/header.php');
include('../view/navbar.php');
?>
<div class="two-col-layout">
    <main Class="main">

        <article Class="article">
            <h1><?= $title ?></h1>

            <p class="author">Skriven av Markus Lindgren, uppdaterad <time datetime="2022-09-08">2022-09-08</time>.</p>

            <figure class="figure right">
                <img src="img/markus.png" width="300" class="me" alt="Bild på mig">
                <figcaption>Markus Lindgren</figcaption>
            </figure>

            <p>Här kommer snart Markus egen fina me-sida. Nedan är en bild på Markus själv. Just nu så är det bara en me-sida. Allt det fina kommer senare! Men till att börja med så måste jag fylla på med en hel del text då jag nu har en bild här som det är tänkt att den här texten ska flöda runt och för att det ska funka så måste jag fylla på med text. Jag får inte heller glömma att uppdatera datumet nedan så att det stämmer, annars är det väl ingen poäng att ha det där. Sedan är ju en fundering hur lång text jag behöver men vi kan ju sluta här då det känns som att jag nu har tillräckligt för att kunna testa stylens funktionalitet.</p>
            
        </article>
        <?php include('../view/byline.php') ?>
        
    </main>

    <aside class="aside">
        <p> Här kommer jag vid tillfälle fylla på med lite länkar eller nåt till saker som jag tycker är intressant</p>
    </aside>
</div>
<?php include('../view/footer.php') ?>