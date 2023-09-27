<?php include('../config/config.php') ?>
<?php $title = 'Idag';?>
<?php include('../view/header.php') ?>

<?php
            // Set the timezone to use
            date_default_timezone_set('Europe/Stockholm');

            // The date of today
            $today = date('Y-m-d H:i:s');

            // Name of the week day
            $weekday = date('l');

            $week = date("W");?>
<!--<header>
<div>
<p>Dagens datum är <?= $today ?> och idag är det </p><p style="font-size: 36px; color: pink"><?= $weekday ?> </p><p> V<?= $week ?>.
</div>
</header>
-->

<div class="two-col-layout">
    <main class="main-c">
        <article class="article-c">
            <header>
                <h1>Hola</h1>
                <div>
                <p class="crazy8">Dagens datum är <?= $today ?> och idag är det </p><p style="font-size: 36px; color:blue;transform: rotate(-20deg); position: relative;
    top: -50px;"><?= $weekday ?> </p><p> V<?= $week ?>.
                </div>
            </header>
            <figure class="figure left">
                <img src="img/rock.gif" width="300" alt="Clock">
                <figcaption></figcaption>
            </figure>
            
        </article>
    </main>
    <aside class="aside-c">
                    <h1> Kursen webtec </h1>
                    <p> hej hallu
                    <hr>
                    <h1> Blaster</h1>
                    <audio id="player" controls autoplay>
                        <source src="audio/sound.ogg" type="audio/ogg">
                        <source src="audio/sound.mp3" type="audio/mp3">
                        Your browser does not support the audio element.
                    </audio>
                    <hr>
                    
                </aside>
</div>

<?php include('../view/footer.php') ?>