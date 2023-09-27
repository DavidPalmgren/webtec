<?php include('../config/config.php');
 $title = 'Doc';
 include('../view/header.php') ?>

<main class="main">
    <div class="two-col-layout">
        <article class="article">
            <header>
               <h2>Dokumentationsidan</h2>
               <p>Articles sidan och Article sidorna samt Objekts och Objekt: Jag byggde upp en sida som länkade till dem individuella artiklarna ifrån denna sidan jag använde get för att ladde in rätt inehåll med pdo. "Articles" > "Articleview.php?page="" jag gjorde pdo saker oftast som en php sida som jag includade där jag behövde dem. t.ex. pdotest och nextload. </p>
               <p>Vyer använde jag mestadells för header,footer,navbar men hade även dem individuella sidorna som article laddaren och objekt laddaren som vyer.</p>
               <p>I db katalogen låg sql relaterat, i source låg funktioner som det skulle css i css mappen och config i config.
            </header>

        </article>

        
    </div>
    
</main>
<?php include('../view/footer.php') ?>