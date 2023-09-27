<?php

include('../config/config.php');
$title = 'Month';
include('../view/header.php');

$date = $_GET['date'] ?? date('Y-m-d');

$dateStr = "";
if ($date) {
    $dateStr = htmlentities($date);
}
$timestamp = strtotime($date);

$year = date('Y', $timestamp);
$month = date('m', $timestamp);
$monthnum = date('N', $timestamp);
$monthName = date('F', $timestamp);
$daysInMonth = date('t', $timestamp);
$weekdaynumber = date('N', $timestamp);
$weekday = date('l', $timestamp);
$weekNumber = date("W", $timestamp);

$dayOfYear = date("z", $timestamp) + 1;

$dateStr = date('Y-m-d', $timestamp);
$firstDateInMonth = date('Y-m-01', $timestamp);
$lastDateInMonth = date("Y-m-$daysInMonth", $timestamp);

$timestampPreviousMonth = strtotime($firstDateInMonth . "- 1 day");
$timestampNextMonth = strtotime($lastDateInMonth . "+ 1 day");

$prevMonth = date('Y-m-01', $timestampPreviousMonth);
$nextMonth = date('Y-m-01', $timestampNextMonth);

$calStr = "";
$timestamp2 = strtotime($firstDateInMonth);

//Känns som jag nog har gjort denna lite onödigt komplicerad men visste inget annat sätt att lösa uppgiften : ) PHPCBF var en verklig livsräddare i denna upg oxå
// kan även säga att jag redan gjort klart med td innan jag kom på att tr tar hela skiten annars hade jag nog sparat några utskrifter
for ($i = 1; $i <= $daysInMonth; $i++) {
    $aDate = date('d', $timestamp2);
    $weekday2 = date('l', $timestamp2);
    $weeknumber2 = date('W', $timestamp2);
    $elephant = $i;
    $dayOfYear2 = date("z", $timestamp2) + 1;


    if ($i == 1) {
        if ($weekday2 === 'Sunday') {
            $calStr .= "<tr class=red>\n";
            $calStr .= "<td class=red> $month / $aDate </td>\n";
            $calStr .= "<td class=left>$weekday2 $dayOfYear2/365 </td>\n";
            $calStr .= "<td class =red>V.$weeknumber2</td>\n";
            $calStr .= "</tr>\n";
        } elseif ($weekday2 !== 'Sunday') {
            $calStr .= "<tr>\n";
            $calStr .= "<td> $month / $aDate </td>\n";
            $calStr .= "<td class=left>$weekday2 $dayOfYear2/365 </td>\n";
            $calStr .= "<td>V.$weeknumber2</td>\n";
            $calStr .= "</tr>\n";
        }
    } elseif ($weekday2 === 'Sunday') {
        $calStr .= "<tr class=red>\n";
        $calStr .= "<td class=red> $month / $aDate </td>\n";
        $calStr .= "<td class=redleft>$weekday2 $dayOfYear2/365 </td>\n";
        $calStr .= "<td class=red></td>\n";
        $calStr .= "</tr>\n";
    } elseif ($weekday2 === 'Monday') {
        $calStr .= "<tr>\n";
        $calStr .= "<td>$month / $aDate </td>\n";
        $calStr .= "<td class=left>$weekday2 $dayOfYear2/365</td>\n";
        $calStr .= "<td>V.$weeknumber2</td>\n";
        $calStr .= "</tr>\n";
    } elseif ($weekday2 !== 'Monday') {
        if ($weekday2 !== 'Sunday') {
            if ($i !== 1) {
                $calStr .= "<tr>\n";
                $calStr .= "<td>$month / $aDate </td>\n";
                $calStr .= "<td class=left>$weekday2 $dayOfYear2/365 </td>\n";
                $calStr .= "<td></td>\n";
                $calStr .= "</tr>\n";
            }

        //echo "<h2>PHP is Fun!</h2>";
        }
    }
    $timestamp2 = strtotime("+ 1 day", $timestamp2);
}
 // Calculate the time it took to process this page
 $timestampFirst = $_SERVER["REQUEST_TIME_FLOAT"];
 $timestampLast = microtime(true);
 $diff = $timestampLast - $timestampFirst;
 $loadTime = round($diff * 1000, 3);

?>

<div class="two-col-layout">
    <main class="main">
    <article class="article">
<h2>HTML formulär med GET</h2>

<form action="#" method="get">
    <p>
        Datum:
        <input type="text" value="<?= $dateStr ?>" name="date" placeholder="Skriv in ett datum">
    </p>

    <p>
        <input type="submit" value="Skicka" name="doit">
        <input type="reset" value="Rensa"> 
        
    </p>
    <h2 style=color:red> !Jag jobbar med kmom04 kalendern vilket kan göra att cssn ändras medans jag håller på! men bör fortfarande funka </h2>
    <output>
        <?php if ($dateStr) : ?>
            You have submitted the date: <code><?= $dateStr ?></code>.
        <?php endif; ?>
    </output>
</form>


<pre><?= var_dump($_GET) ?></pre>

<ul>
    <li> Current date<?=$dateStr ?> <a href="?date=<?= date('Y-m-d') ?>">today</a></li> 
        </ul>
        <!--
    <li> First date in the month<?=$firstDateInMonth ?> </li>
    <li> Last date in the month<?=$lastDateInMonth ?> </li>
    <li> Previous month<?=$prevMonth ?> <a href="?date=<?= $prevMonth ?>">previous</a></li>
    <li> Next month<?=$nextMonth ?> <a href="?date=<?= $nextMonth ?>">next</a></li>
</ul>
<ul>
    <li>Year = <?=$year?></li>
    <li>Month = <?=$month?></li>
    <li>Days in month = <?=$daysInMonth?></li>
    <li>Day =<?= $weekday ?></li>
    <li>Date = <?=$date?>, <?=$weekday?>, day <?=$weekdaynumber?> of the week</li>
    <li>Timestamp = <?=$timestamp?>, (now = <?=time() ?></li>
</ul>
        -->
    <h2> メリークリスマス＆ハッピーニューイヤー!!! <?=$dateStr ?> </h2>
    
    <table class ="month">
        <tr class ="month">
            <td><a href="?date=<?= $prevMonth ?>">Previous  </a><a href="?date=<?= $nextMonth ?>">Next</a>
            <td colspan="2"><?=$year ?> <?= $monthName ?></td>
        </tr>
        <?=$calStr ?>
    </table>
        </article>
        <p> Load time for page :<?=$loadTime ?></p>
        </main>
        </div>

        



<?php include('../view/footer.php') ?>