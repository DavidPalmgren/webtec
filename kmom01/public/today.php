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
<header>
<div>
<p>Dagens datum är <?= $today ?> och idag är det </p><p style="font-size: 36px; color: pink"><?= $weekday ?> </p><p> V<?= $week ?>.
</div>
</header>

<?php include('../view/footer.php') ?>