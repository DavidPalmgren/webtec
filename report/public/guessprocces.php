<?php

include('../config/config.php');

// Get incoming values from posted form
$name     = $_POST["name"] ?? "";
$address  = $_POST["address"] ?? "";
$checkbox = $_POST["check"] ?? false;

?>


<?php
$test1 = $_SESSION['test1'];
$testArray[$test1] = $_SESSION['testArray'];


echo $testArray[$test1];
echo $test1;

?>





<h1>Form submission services</h1>


<?php if ($name == $test1) :
    $_SESSION["flash-message"] = "Everything was fine!";
    header("Location: correct.php")?>
    <p>RAGIN SUCCESS!!!!!!!!!<br><?= htmlentities($name) ?></p>
<?php else :
    $_SESSION["flash-message2"] = "Everything was wrong!";
    header("Location: correct.php")?>
    <p>You did NOT enter your name!</p>
    
<?php endif; ?>
