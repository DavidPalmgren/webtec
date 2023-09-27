
<?php

include('../config/config.php');

include('../view/header.php');
$title = 'Resultat för guessgame';
$flashMessage = "Your guess is correct congratulations!";

$flashMessage = $_SESSION["flash-message"] ?? null;
unset($_SESSION["flash-message"]);
unset($_SESSION["flash-message2"]);
?>

<main class="main">
    <h1><?= $title ?></h1>

    <?php if ($flashMessage) : ?>
        <div class="success"><?= $flashMessage ?> Your guess was <?=$_SESSION['test1']?></div>
    <?php else : ?>
        <div class="failure"><?$flashMessage2 ?></div>
    <?php endif; ?>

<p> Tack för att du spelar </p>
<a href="guessname.php">Guessname</a>
    </main>
<?php   include('../view/footer.php'); ?>