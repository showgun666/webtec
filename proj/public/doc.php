<?php

include('../config/config.php');

$title = 'dokumentation';
include('../view/header.php');
include('../view/side.php');
?>

<div class="content">
    <div class="content-box content-center text-center">
        <h3 class="content-title text-center"> Dokumentation BMO </h3>
        <p>När jag började skapa den här hemsidan så tittade och skissade jag först på hur jag ville att den skulle se ut. Därefter så tog jag ett element i taget och började med header, footer, main-innehållets layout samt siden.</p>
    </div>
    <div class="content-box content-right text-right">
        <h3> Kodstruktur</h3>
        <p>När jag började skapa den här hemsidan så tittade och skissade jag först på hur jag ville att den skulle se ut. Därefter så tog jag ett element i taget och började med header, footer, main-innehållets layout samt siden.</p>
        <p>Jag valde att slå ihop headern med navbar då jag ville ha en ganska minimalistisk look och det kändes ändå rimligt att göra så. Footern, headern och side ligger alla under /view och är statiska. Därefter började jag arbeta med att implementera databasen.</p>
        <p>För att hålla den mesta kod på samma ställe så försökte jag att hålla allt ganska lokalt till varje sidkontroller och om jag hade större stycken kod så bröt jag ut det och lade under /src. </p>
        <p>När jag skapade sökfunktionen så bestämde jag mig för att köra POST istället för GET, främst för att visa på att jag kan hantera POST. Om jag skulle göra det på riktigt skulle jag nog använda GET då i stort sett alla sidor gör så.</p>
        
    </div>
    <div class="content-box content-left text-left">
        <h3> Responsivitet </h3>
        <p>Jag har försökt att tänka på responsivitet från början och använt procentsatser så ofta som möjligt för att styla.</p>
        
    </div>
    <div class="content-box content-right text-right">
        <h3> Förbättringar </h3>
        <p>Nyhetssidan skulle kunna förlängas, kanske ta senaste två eller tre artiklarna eller kanske lägga till några nya objekt eller så. Kanske nyheter om kommande projekt. Likaså så kan förstasidan HEM fyllas ut lite mer.</p>
        <p> Sökmotorn skulle fungera mycket bättre om kolumnerna i databasen var på svenska eller ifall man skulle skriva ihop någon kod som gjorde så att om man sökte på t.ex. artikel så tolkar programmet det som article när den söker i db bland kategorier.</p>
    </div>
</div>

<?php
include('../view/footer.php');
