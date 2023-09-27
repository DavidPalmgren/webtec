<?php include('../config/config.php');
 $title = 'Min sida';
 include('../view/header.php') ?>

<main class="main">
    <div class="two-col-layout">
        <article class="article">
            <header>
                <h1> This is Conker</h1>
                <p style="color: #333">He is a friendly woodland creature from an old-ass game usually looking for some nuts and money!<br>Today he is here to learn some code because it's been a longtime goal.</p>
                
            </header>

            <figure class ="figure center">
                <img src="img/conkermoney.jpg" alt="conker">
                <figcaption>Conker</figcaption>
            </figure>

            <?php include('../view/byline.php') ?>

        </article>
        
        <aside class="aside">
            <h1> Kursenwebtec</h1>
            <p> hej hallu
            <hr>
            <h1> Another</h1>
            <p> innehåll här och sådant </p>
            <hr>
        </aside>
        
    </div>
    
</main>
<?php include('../view/footer.php') ?>