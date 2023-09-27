<?php
include('../config/config.php');

$title = 'Sessionen';

include('../view/header.php');
?>

<main class="main">
    <h1><?= $title ?></h1>

    <p>För att visa detaljer om sessionen och felsökning.</p>
    <a href="session_destroy.php">Destroy!</a>
    <p><a href="session_write.php">Write!</a></p>

    <?php include('../view/session_display.php') ?>
</main>

<?php include('../view/footer.php') ?>