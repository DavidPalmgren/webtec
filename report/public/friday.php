<?php

include('../config/config.php');

$title = 'PHP play';

include('../view/header.php');
?>
<?php














    // Set the timezone to use
    date_default_timezone_set('Europe/Stockholm');

    // The date of today
    $today = date('Y-m-d H:i:s');

    // Name of the week day
    //$weekday2 = date('l');

    $week = date("W");

    $friday = "";
    $date = $_GET['date'] ?? date('Y-m-d');
    $timestamp = strtotime($date);

    $dateStr = date('Y-m-d', $timestamp);
    $weekdaynumber = date('N', $timestamp);
    $weekday = date('l', $timestamp);
    $weekdaynumber2 = date('N');

    $message = "Today is $weekday and it is $weekdaynumber days untill friday.";

if ($weekdaynumber == 5) {
    $message = "Hurrayyyyyyyyyyyyyyyyyyy it is $weekday today";
    $friday = "FRIDAAAA AAA  AA   AY!";
} else {
    $daystill = 5 - $weekdaynumber;
    if ($daystill == -1) {
        $daystill = 6;
    }
    if ($daystill == -2) {
        $daystill = 5;
    }

    $message = "It is $daystill days till Friday and currently $weekday";
}

?>

<div class="two-col-layout">
<main class="main">
    <article class ="article">
        
        <h2> Let's play with some dates! </h2>

        
        <a href="http://localhost:8080/dbwebb2/webtec/me/report/public/friday.php?date=2022-09-16">Friday </a>
        <p><?= $message ?> </p>
        <p style="font-size: 28px;font-family: Jazz LET, fantasy;color: rgb(0, 0, 255);letter-spacing: .3rem;"><?= $friday ?> </p>
        <p></p>
        <figure class="figure center">
        <?php
        if ($weekdaynumber == 5) {
            echo '
            <video width="" height="" controls autoplay>
            <source src="movie.mp4" type="video/mp4">
            <source src="video/vidya.mp4" type="video/ogg">
            Your browser does not support the video tag.
            </video>';
        }
        ?>
    </figure>
    </article>
</main>
<aside class="aside center">
    <h2> Hello to this Friday page </h2>
<figure class="figure center">
<?php
if ($weekdaynumber == 5) {
    echo '
            <img src="img/dancingbeargif.gif" width="" alt="Clock">
            <img src="img/dancingbeargif.gif" width="" alt="Clock">
            <img src="img/dancingbeargif.gif" width="" alt="Clock">
            <img src="img/dancingbeargif.gif" width="" alt="Clock">
            <audio id="player" controls>
                        <source src="audio/sound.ogg" type="audio/ogg">
                        <source src="audio/sound.mp3" type="audio/mp3">
                        Your browser does not support the audio element.
                    </audio>
            ';
}
?>   
        </figure>
</aside>
    </div>
<?php


include('../view/footer.php');
?>