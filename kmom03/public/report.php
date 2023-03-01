<?php
include('../config/config.php');

$title = 'Min report-sida för kursen';
include('../view/header.php');
include('../view/navbar.php');
?>
<div class="two-col-layout">
    <main Class="main">

        <article Class="article">
            <h1><?= $title ?></h1>


            <h2 id="kmom01">kmom01</h2>

            <p>Jag arbetar på en maskin som kör windows10 som operativsystem, men i och med kursen så har jag en virtuell maskin som kör linux genom ubuntu. I det stora hela så gick det väldigt bra att installera labbmiljön, det största problemen för mig har varit att vänja mig vid att arbeta på de sätt som vi gör. Oftast så verkar det vara någon liten sak som jag missat eller missförstått när jag stöter på problem.</p>
            <p>Tidigare har jag försökt att lära mig programmera i python, och då har jag använt andra texteditorer och terminaler. Det har varit inbyggda system i github, det har varit sublime text och det har varit anaconda. terminalen jag arbetat med tidigare har väl varit ganska begränsad till windows kommandotolk, och även den har jag knappt använt till fler saker än att port forwarda eller kolla min ip när jag spelat onlinespel för 15-20 år sedan.</p>
            <p>Linux har jag dock jobbat lite grann med genom github. Inte mer än 10 timmar tror jag inte men lite i alla fall.</p>
            <p>Jag skulle aldrig våga påsta att jag är på något sätt van vid att arbeta med unix-kommandon eller terminal, men lite erfarenhet är jag till den nivån att jag förstår konceptet. Och varje liten sak hjälper hoppas jag.</p>
            <p>När jag gick i gymnasiet år 2010 så gick jag en kurs i html som jag kuggade och jag minns inte mer än att jag jobbade med det och att det var mycket klossar. Jag förstod aldrig hur jag installerade labbmiljön hemma och det som var svårt gav jag snabbt upp på på den tiden.</p>
            <p>För min del så var det inte några problem att komma igång med kursmomentet annat än att det tog lite tid att hitta uppgifter på canvas och hur jag orienterar mig där, men det ska jag kunna vänja mig vid innan slutet av kursen.</p>
            <p>Det är väldigt svårt att komma in på en enda sak som jag lärt mig under detta moment. Jag har lärt mig mer i detalj hur hemsidor funkar, jag har lärt mig oerhört mycket med html och hur olika hemsidor kan peka till varann och stilar med mer. TIL grunden till hur hemsidar är uppbyggda och på det stora alla de vikigaste resurserna jag skulle behöva för att lära mig bygga hemsidor på egen hand(med hjälp av dessa resurser).</p>
            <h2 id="kmom02">kmom02</h2>

            <p>Jag började arbeta igenom sida vid sida med övningen. Jag valde att dela upp så att min style för navbar fick en egen navbar.css och samt en navbar.php för html. Jag behöll headern så att jag hela tiden sida vid sida kunde se skillnaderna mellan nya navbaren och gamla headern.
                Min shortcut icon slutade fungera så jag har försökt felsöka och hitta en lösning på det. Får återkomma med svar hur det gick. Nu har jag återkommit och shortcut icon likaså. jag har ingen aning om varför den är tillbaka men jag är glad ändå. Jag har flyttat navbaren till vänster sida. Den strular lite när jag zoomar för mycket, jag skulle vilja ett den inte glider ihop med main men det får jag lösa senare. Fokuserar främst på att absorbera lite av så mycket som möjligt så kan jag välja att grotta ned mig i saker senare.
                Jag har också försökt att få till så många klickbara länkar som jag kan komma på. All text och loggan i headern är klickbar och jag har lagt till lite genvägar till bra saker för kursen.
                Jag gjorde en sida för lite TIL också för att spinna vidare lite på det temat i kursen för att testa saker och leka lite. Får se vad det blir av den i framtiden, men jag tänkte att det kan vara min pionjärsida.
                Det dyker fortfarande upp identifierfiler av bilder, särskilt .png format verkar det som.
                Jag hade en hel del html-fel i unicorn som jag fick felsöka. Det var väldigt lärorikt och intressant.
            </p>
            <p>En lustig grej var att i stort sett alla uppgifter var klara efter att jag gjort övningarna. Jag hade liksom tagit eget initiativ under övningarna och fyllt ut hemsidan. Känns bra.</p>

            <p>Ett problem dock är att det ibland kommer instruktioner som inte är tydliga, och då vet jag inte vad som förväntas av mig eller vad jag ska göra och jag spenderar mycket tid på att försöka förstå vad det betyder.</p>


            <h2 id="kmom03">kmom03</h2>

            <p>Jag råkade lösa delen om information om veckans dagar och datum med loopar på egen hand, då jag inte scrollade vidare och såg att lösningen fanns innan jag spenderade säkert en och en halv timme på att lista ut hur jag skulle få till det. Det känns ganska bra och det känns som att jag lärt mig en hel del.</p>
            <p>Än så länge så känns PHP ganska straight forward. Det krångliga för mig är mer kombinationen av html och php, vart alla vinklar ska sitta och när man ska ha frågetecken osv. Men det blir klarare för var gång jag jobbar med det. </p>
            <p>Det känns ganska smart och fiffigt att använda sidkontroller och vyer, men jag undrade lite under uppgiften för mig själv om jag skulle plocka ut mycket av php-koden ur sidvyn och sätta det i en kontroller istället, men istället så bakade jag bara in allt i friday och month. Det kändes okej, men beroende på hur stor en sida är och vilken kod det är så kan jag förstå att det kan vara bra att bryta ut delar och importera det istället.</p>
            <p>Än så känns det väl ganska obekvämt, segt och struligt. Jag har fått sitta mycket med dokumentationen för date och slitit mig i håret för att få saker att funka. Knapparna för nästa och föregående månad gjorde jag först som länkar och snurrade till det ordentligt med php, vilket jag tror var ganska bra för jag lärde mig en hel del innan jag gjorde knapparna som du kan se i den färdiga sidan. Grundkonstruktionerna i övrigt är ganska bra och min IDE hjälper mig när jag inte förstår saker.</p>
            <p>Eftersom jag ligger så helt otroligt långt efter så valde jag att inte lägga extra tid på extrauppgifterna. Friday var väldigt rakt på kändes det som. Jag klockade inte mig själv men det kändes som att jag var klar på typ 10 minuter, om man bortser från tiden jag lade på att hitta bilder, en gif och göra css till sidan.</p>
            <p>Month-sidan tog längre tid och som jag nämnde tidigare så snurrade jag till det lite extra för mig. Jag började med att titta igenom uppgiften med kraven och försöka lista ut hur jag skulle gå tillväga för att få allt på plats på ett bra sätt. Sedan tittade jag på dokumentationen för tables och kompletterade med några väl varda sökord på google för att bygga en tabell som skulle göra det jag ville och lade till lite css för de visuals jag ville ha med mock-text i tabellen. Sedan började jag jobba med php och get för att fylla tabellen. Jag började med själva loopen och lade till variabler allteftersom jag behövde dem. Sedan när kalendern var klar så gjorde jag knapparna.</p>
            <p>Dagens TIL är hur man kan hämta information från en användare och sedan köra php-kod för att visa olika saker på hemsidan. Det känns riktigt ballt och jag är taggad på att jobba med sessions.</p>
            <h2 id="kmom04">kmom04</h2>

            <p>Här kommer redovisningstexten för detta kursmoment.</p>

            <h2 id="kmom05">kmom05</h2>

            <p>Här kommer redovisningstexten för detta kursmoment.</p>

            <h2 id="kmom06">kmom06</h2>

            <p>Här kommer redovisningstexten för detta kursmoment.</p>

            <h2 id="kmom07">kmom07</h2>

            <p>Här kommer redovisningstexten för detta kursmoment.</p>

            <h2 id="kmom08">kmom08</h2>

            <p>Här kommer redovisningstexten för detta kursmoment.</p>

            <h2 id="kmom09">kmom09</h2>

            <p>Här kommer redovisningstexten för detta kursmoment.</p>

            </article>
        <?php include('../view/byline.php') ?>
        
    </main>

    <aside class="aside">
        <p>Snabblänkar</p>
        <ul>
            <li><a href="#kmom01">kmom01</a></li>
            <li><a href="#kmom02">kmom02</a></li>
            <li><a href="#kmom03">kmom03</a></li>
            <li><a href="#kmom04">kmom04</a></li>
            <li><a href="#kmom05">kmom05</a></li>
            <li><a href="#kmom06">kmom06</a></li>
            <li><a href="#kmom07">kmom07</a></li>
            <li><a href="#kmom08">kmom08</a></li>
            <li><a href="#kmom09">kmom09</a></li>
        </ul>
    </aside>
</div>
<?php include('../view/footer.php') ?>