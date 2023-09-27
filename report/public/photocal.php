<?php

include('../config/config.php');
$title = 'New Calender';
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
$timestamp3 = strtotime($lastDateInMonth);
$timestamp4 = $timestamp2;
//Känns som jag nog har gjort denna lite onödigt komplicerad men visste inget annat sätt att lösa uppgiften : ) PHPCBF var en verklig livsräddare i denna upg oxå




$something = date('d-', $timestampPreviousMonth);


$intsomething = (int)$something;




//Get the first Monday in January
$lastmonday = date("d-m-Y", strtotime("last monday"));
//Result is: Monday, 05-Jan-2015
$lastmondaytimestamp = strtotime($lastmonday);






for ($i = 1; $i <= $daysInMonth; $i++) {
    $aDate = date('d', $timestamp2);
    $weekday2 = date('l', $timestamp2);
    $weeknumber2 = date('W', $timestamp2);
    $elephant = $i;
    $dayOfYear2 = date("z", $timestamp2) + 1;
    $weekdaynumber2 = date('N', $timestamp);

    $prevMonth2 = date('m', $timestampPreviousMonth);
    $nextMonth2 = date('m', $timestampNextMonth);
    $count = 0;
    $morestuff = 7 - $weekdaynumber2;
    $lastmonth = date("Y-m-$daysInMonth", $timestamp);


    $firstDateInMonth2 = date('Y-m-01', $timestamp);


    $daysInMonth2 = date('t', $timestamp3);
    $intdayst = (int)$daysInMonth2;
    $intdayst2 = $intdayst - 1;

    $something = date('d-', $timestampPreviousMonth);
    $intsomething = (int)$something;

    $intweekdaynumber2 = $weekdaynumber2 - 2;
    $fillerdays = $intsomething - $intweekdaynumber2;
    $uselessshit =

    $dayOfYear3 = date("z", $timestampPreviousMonth) + 1;
    $intdayOfYear3 = (int)$dayOfYear3;
    $bullshittery = $intdayOfYear3 - $intweekdaynumber2;

    $reversefillerdays = 7 - $weekdaynumber2;
    $number = 1;









    if ($i == 1) {
        $calStr .= "<td class=standard>V.$weeknumber2</td>\n";
    }

    if ($i == 1) {
        $ssda = strtotime($firstDateInMonth);
        $lastM = date('N', $ssda);


        $firstDateInMonth2 = $lastM - 2;

        $fd2 = $firstDateInMonth2;
        $abcd = $intsomething - $fd2;

        for ($abcd; $abcd <= $intsomething; $abcd++) {
            $dayOfYear3 = date("z", $timestampPreviousMonth) + 1;

            $timestamp4 = strtotime("+ 1 day", $timestamp4);

            $calStr .= "<td class=faded>$prevMonth2 / $abcd  $bullshittery / 365</td>";
            $bullshittery++;
        }
    }




    if ($i == 1) {
        if ($weekday2 === 'Sunday') {
            $calStr .= "<td class=redleft>$month / $aDate  $dayOfYear2 / 365 V.$weeknumber2</td>\n";
        } elseif ($weekday2 !== 'Sunday') {
            $calStr .= "<td class=left>$month / $aDate  $dayOfYear2 / 365 </td>\n";
        }
    } elseif ($weekday2 === 'Sunday') {
        $calStr .= "<td class=red> $month / $aDate  $dayOfYear2 / 365</td>\n";
    } elseif ($weekday2 === 'Monday') {
        $calStr .= "</tr>\n";
        $calStr .= "<tr>\n";
        $calStr .= "<td class=standard>V.$weeknumber2</td>\n";
        $calStr .= "<td class=standard>$month / $aDate  $dayOfYear2/ 365</td>\n";
    } elseif ($weekday2 !== 'Monday') {
        if ($weekday2 !== 'Sunday') {
            if ($i !== 1) {
                $calStr .= "<td class=standard>$month / $aDate  $dayOfYear2 / 365 </td>\n";
            }

        //echo "<h2>PHP is Fun!</h2>";
        }
    }

    if ($i == $daysInMonth) {
        $weekdaynumber2 = date('N', $timestamp2);
        $dayOfYear3 = date("z", $timestampNextMonth) + 1;
        //$number = $dayOfYear3 + $daysInMonth;
        while ($weekdaynumber2 <= 6) {
            $timestamp4 = strtotime("+ 1 day", $timestamp4);



            $calStr .= "<td class=faded>$nextMonth2 / $number $dayOfYear3 / 365</td>";
            //$weekday2 ->modify('+1 day');
            $weekdaynumber2 += +1;
            $dayOfYear3 += +1;
            $number += 1;
        }
    }
    $count = +1;
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
<?php
if ($month == 1) {
    echo'
<img src="img/months/january.webp" alt="månad">';
}
if ($month == 2) {
    echo'
    <img src="img/months/february.jpg" alt="conker">';
}
if ($month == 3) {
    echo'
    <img src="img/months/march.jpg" alt="conker">';
}
if ($month == 4) {
    echo'
    <img src="img/months/april.webp" alt="conker">';
}

if ($month == 5) {
    echo'
    <img src="img/months/maj.jpg" alt="conker">';
}
if ($month == 6) {
    echo'
    <img src="img/months/juni.jpg" alt="conker">';
}
if ($month == 7) {
    echo'
    <img src="img/months/juni.jpg" alt="conker">';
}
if ($month == 8) {
    echo'
    <img src="img/months/augusti.jpg" alt="conker">';
}
if ($month == 9) {
    echo'
    <img src="img/months/september2.jpg" alt="conker">';
}
if ($month == 10) {
    echo'
    <img src="img/months/oktober2.jpg" alt="conker">';
}
if ($month == 11) {
    echo'
    <img src="img/months/november.jpg" alt="conker">';
}
if ($month == 12) {
    echo'
    <img src="img/months/december.jpg" alt="conker">';
}
?>
    <table class ="month">
        <tr class ="month">
            <td colspan="2"><a href="?date=<?= $prevMonth ?>">Previous  </a><a href="?date=<?= $nextMonth ?>">Next</a>
            <td colspan="6"><?=$year ?> <?= $monthName ?></td>
        </tr>
        <tr><td>Week</td>            <td>Mon</td>
            <td>Tue</td>
            <td>Wed</td>
            <td>Thu</td>
            <td>Fri</td>
            <td>Sat</td>
            <td>Sun</td>
        </tr><tr>
        <?=$calStr ?>
    </table>
        </article>
        <p> Load time for page :<?=$loadTime ?></p>
        </main>
        </div>

        



<?php include('../view/footer.php') ?>