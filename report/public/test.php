<?php
include('../config/config.php');
$title = 'something';
include('../view/header.php');
?>
<h2>HTML formulär med GET</h2>

<form action="" method="get">
    <p>
        Datum:
        <input type="text" value="<?= $dateStr ?>" name="date" placeholder="Skriv in ett datum">
    </p>

    <p>
        <input type="submit" value="Skicka" name="doit">
        <input type="reset" value="Rensa">
    </p>
</form>
<?php

// Extract details about the date, if it is a valid date
$date = $_GET['date'] ?? null;

// Extract details about the date, if it is a valid date
$timestamp = null;
if ($date) {
    $timestamp = strtotime($date);
}

if ($timestamp) {
    $dateStr = date('Y-m-d', $timestamp);
    $monthStr = date('F', $timestamp);
    $monthDaysStr = date('t', $timestamp);
    $weekStr = date('W', $timestamp);
    $dayStr = date('l', $timestamp);
}
?>


<?php if ($date) : ?>
    <p>
        The incoming date argument is <code><?= htmlentities($date) ?></code>.
    </p>

    <?php if ($timestamp) : ?>
        <p>
            The date is <?= $dateStr ?> and that is/was a <?= $dayStr ?> in the 
            week <?= $weekStr ?> in the month <?= $monthStr ?> that has 
            <?= $monthDaysStr ?> days.
        </p>
    <?php else : ?>
        <p>The incoming date is not a valid date.</p>
    <?php endif; ?>

<?php else : ?>
    <p>
        You did not send a date through the querystring, do that by adding this 
        to the url: <code>?date=2022-08-23</code>
    </p>
<?php endif; ?>

