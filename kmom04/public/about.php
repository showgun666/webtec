<?php
include('../config/config.php');

$title = 'Om kurs och webbplatsen';
include('../view/header.php');
include('../view/navbar.php');
?>


<div class="two-col-layout">
      
    <main Class="main">
        <article Class="article">
            <img src="img/logo.png" width="775" class="me" alt="Bild som representerar kursen."> 
            <h1>Om kursen och webbplatsen</h1>
            <p>Jag läser Webtec på BTH och under kursens gång så kommer jag att lära mig att bygga en hemsida. Den här hemsidan.</p>
        </article>
        
    </main>

    <aside class="aside">
    <p>Kursens kursrepo på Github nås <a href="https://github.com/dbwebb-se/webtec">här</a></p>
    </aside>
    
</div>

<?php include('../view/footer.php') ?>