<?php

include('../config/config.php');
$title = 'Guessing game';
include('../view/header.php');

//$trash1 = array_rand(getNameDaysByName([0]),1);

//$trash2 = array_rand(getNameDaysByNameFull(1112),1);



$justnamearray =

$testArray = getNameExplanation();
$test1 = array_rand(getNameExplanation());

//echo var_dump($testArray);



$_SESSION['testArray'] = $testArray[$test1];
$_SESSION['test1'] = $test1;



?>
<h2>Gissa med beskrivningen nedan!</h2>

<?php echo $testArray[$test1]; ?>
<p></p>




<form method="post" action="guessprocces.php">
    <fieldset>
        <legend>Svara här</legend>

        <p>
            <label>Namn:<br>
                <input type="text" name="name" placeholder="Skriv in ditt namn...">
            </label>
        </p>
        <p>
            <input type="submit" value="Skicka" name="doit">
        </p>
    </fieldset>
</form>

<?php   include('../view/footer.php'); ?>