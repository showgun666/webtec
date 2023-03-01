<?php
include('../config/config.php');

$title = 'Min report-sida för kursen';
include('../view/header.php');
include('../view/navbar.php');
?>
<div class="two-col-layout">
    <main Class="main">
        <aside class="aside" style="float: left;">
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

            <p>Detta kursmoment kändes det som att jag lade ner alldeles för mycket tid på kalendern. Jag försökte få den snygg, satt och lajjade i css en del, och försökte få allt att liksom stämma någorlunda med hur en kalender brukar se ut. Såg inte förrän senare att det var frivilligt att lägga till namnen, så jag fick ganska mycket extra på det skulle jag tro för jag gjorde nästa uppgift på säkert en tiondel av tiden jag gjorde första.</p>
            <p>Arrayer funkar ganska bra tycker jag. Det påminner mycket om att jobba med typ listor eller dictionaries i python och så fort jag fattade hur jag skulle komma åt värden i en array och vad som var vad så kändes det busenkelt och superbra.</p>
            <p>Jag gillar funktioner. Jag hittade mer kod som jag kunde göra till funktioner, men det kändes som så otroligt små grejer att isåfall skulle det bara vara för att träna på att göra funktioner. Jag gjorde en för att debuga arrayen och förstå mig på den, tror den ligger kvar fast bortkommenterad i functions.php.</p>
            <p>För att vidarutveckla lite, så det fanns några stycken där jag upprepade kod, men det hade blivit funktioner med kanske en eller två rader kod. T.ex. när jag inkrementerade dag i kalendern så hade jag en if else för söndagar, och istället för att bloata där med de extra tecknen så hade jag kunnat göra en funktion. Men jag valde att inte göra det. Jag förstår hur funktioner fungerar, iaf i den utsträckningen som vi har gått igenom funktioner i kursen hittils, men jag har inte ansett att det behövts några nya funktioner än så länge bortsett från min debugfunktion som inte gick igenom validatorn pga att jag använde debugfunktionsrop i den.</p>
            <p>Ja, jag kan se skillnaden på html fromulär med get och post... Get skickar data i url och post skickar datan i servern, så då ser man inget i url, och då är det inte en get. Typ.</p>
            <p>Det gick bra att jobba med session. Största problemet jag hade var att jag blev lite vilse i min egen mappstruktur när jag kastade användaren fram och tillbaka till olika sidor och behövde importera från massa olika platser. Jag gjorde det lite extra snurrigt för mig med avsikt för att träna på det, men själva session och att skicka vidare variabler med det var inga problem.</p>
            <p>Jag kan börja med att säga att jag är missnöjd med kalendern och skulle göra om den ifall jag kände att jag hade tiden. Jag är däremot väldigt nöjd med namngissningsspelet, då det både gick fort och bra med den så det var en självförtroendeboost efter säkert 5 timmar på kalendern.</p>
            <p>Kalendern känns som ett träsk eller kråkbo med allt. Jag försökte kommentera upp det så gott jag kunde för att hålla det lite strukturerat och jag bröt ut själva koden som genererar kalendern i en egen fil för att skära ned lite grann på allt brus.</p>
            <p>Om du följer mina kommentarer så framgår det hur jag tänkt, men jag kan försöka förklara lite kort här med. Jag började med att hämta arrayen med alla namn och så försökte jag skriva ut den för att bara se hur den ser ut och få in i mitt huvud hur jag ska angripa datastrukturen.</p>
            <p>När jag gjort det så började jag arbeta med date funktionen och skapade variabler allteftersom jag behövde dem i min kod. Jag skapade en array för alla månadsdagarna så jag kunde få dem på svenska och använda date för att index till rätt månad.</p>
            <p>Det första jag gjorde var att få länkarna fram och tillbaka mellan månaderna att funka. När jag fått de att fungera så började jag arbeta med själva kalendern. Jag utgick ifrån min kod i month, men försökte få det att se ut mer som en kalender och printade dagar. Till en början så skrev jag endast celler för nuvarande månad. Sedan när jag fick det att funka så fyllde jag på med tomma celler före och efter så att kalendern blev full, alltså när månadens första dag inte är en måndag och sista dag inte är en söndag så fyllde jag på celler så att allt hamnade på rätt plats. Sedan när jag fått det att funka så fyllde jag på med datum från föregående och nästkommande månad i de tomma cellerna.</p>
            <p>När jag var klar med det så skrev jag i stort sett av koden från month för att få till dagräknaren för året. Efter det så bet jag tag i hur jag skulle få ut rätt värden med namnsdagar. Det tog längre tid för mig än det borde tycker jag då jag hade svårigheter med att för det första komma åt rätt värde, men för det andra så skrev jag endast ut ett namn senare och insåg att det saknades namn.</p>
            <p>Med namn, datum och dagnummer på plats så började jag ge mig på veckonummer. Det var väldigt snabbt och enkelt avklarat och jag lade bara in en extra kolumn i tablen och sedan satte jag in veckovärde innan varje måndagvärde. Sedan för att få det att ha en korrekt övergång mellan åren så inkrementerade jag datumet också.</p>
            <p>Bilderna hämtade jag bara rakt av från google bildsök och jag lade in dem med lite smarta variabler i bildsökvägen.</p>
            <p>Sedan på gissningsspelet så gjorde jag en snabb och simpel sida för spelet där jag hämtade array med namn och betydelse och skriver ut betydelsen till användaren. Det gick blixtsnabbt kändes det som, förmodligen för jag spenderade så mycket tid med arrays i förra uppgiften. Jag initierade också variabler i session och jag använde en post formulär för att skicka gissningen till game_process.php enl. uppgiften.</p>
            <p>I game_process.php så gör jag väldigt snabb och enkel kontroll genom att jämföra gissning mot namn för att få ett boolean värde, och sedan kör jag det genom en if else sats och sparar värdet i session för att sedan skicka vidare till game_result.php</p>
            <p>I game_result.php så hämtar jag alla resultat från session och visar upp det och så har jag ett till post formulär som tar användaren tillbaka till gissningssidan för att spela igen.</p>
            <p>Jag tyckte det gick så otroligt fort att göra sista uppgiften och jag var vid gott mod, så jag lade även till en räknare i session på antal rätt och fel gissningar som också visas i game_result.php</p>
            <p>Dagens TIL ville jag säga är sessions och hur man kan arbeta med dem, men jag måste säga att jag har suttit så mycket och kliat mig i huvudet med arrays i kalendern, bara för att totalkrossa arrays i gissningsspelet så jag utnämner Arrays som min TIL då det känns som att jag definitivt blivit bra många gånger grymmare på dem än vad jag var innan kmom04.</p>
            
            <h2 id="kmom05">kmom05</h2>

            <p>Innan kursen började så hade jag faktiskt försökt att lära mig lite kodning på egen hand och i det så hade jag jobbat lite med mysql redan, sedan så har skjutit på att avsluta den här kursen så länge att jag hunnit börja med databaskursen och fått lära mig en del där. Inga nya koncept för mig än så länge.</p>
            <p>Övningarna flöt på ganska bra tycker jag. Det var en ganska bra nivå för mig och de gav mig goda förutsättningar för hur jag skulle tänka när jag började bygga sökmotorn och så i uppgifterna.</p>
            <p>Ingenting kändes direkt utmanande i sig. Snarare kändes det som att jag behärskade det jag höll på med och kunde uttrycka mig i kod på det sätt jag ville, vilket gjorde uppgiften extra rolig.</p>
            <p>Jag är ganska nöjd med resultaten. Jag började med att skapa name.php och gjorde klart den. kmom04 blev så stökig så jag bestämde mig för att jobba smartare kmom05 och gjorde fler funktioner och loopar där jag upprepade mig för att ha så snärtig och koncis kod som jag förmådde.</p>
            <p>I förfrågan till databasen så försökte jag göra min kod på ett sätt så att det skulle vara så enkelt som möjligt att lägga till fler tables att söka på. Jag gjorde detta genom att skapa en array med strängar för varje table och sen itererade igenom den arrayen för att få en resultatarray med table array i varje index.</p>
            <p>Sedan i min view name_present.php så plockar jag de värden jag vill ha och presenterar det enligt uppgiften på ett lite snyggt sätt. Jag valde att inte fokusera så mycket på själva presentationen, men jag gjorde vissa uppdateringar till min css för att jag hade lite tid över.</p>
            <p>Eftersom jag hade byggt min kod på ett sätt som gjorde att jag busenkelt kunde lägga till fler tables så gjorde jag extrauppgiften för det och visar upp i mitt resultat antalet män och kvinnor som bär namnen, bara för att visa att jag kunde.</p>
            <p>I sökmotorn så funderade jag på att lägga den som en sökruta i navbaren istället för en länk till sidan, men när jag väl börjat implementerat det så kom jag på att jag kanske skulle få backning på uppgiften så jag valde att inte ta mig några friheter.</p>
            <p>Sökmotorn i search.php fungerar ungefär som name.php med vissa skillnader. Jag gjorde så att det skulle gå att söka på fler tables ifall fler tables tillkom i framtiden. Sedan så försökte jag få bort helgdagar från resultaten med mitt sql statement, men jag fick inte till det 100% men de flesta helgdagarna dyker inte längre upp.</p>
            <p>Sedan har jag en search_result.php view som består av php-kod som genererar en view med en foreach loop som går igenom varje resultat och skapar en hyperlänk med query till name.php.</p>
            <p>Jag har idag lärt mig om hur man gör sql-injections i hemsidor(prövade att skapa en osäker sida och "angrep" mig själv för att se vad som hände) och har fått en djupare förståelse för hur man tänker med säkerhet på sina hemsidor och hur min kod verkar och kan påverkas utifrån.</p>

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
</div>
<?php include('../view/footer.php') ?>