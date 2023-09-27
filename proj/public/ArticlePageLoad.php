<?php

include('connectUser.php');

$stuff2 = $_GET['page'] ?? "";

$db = connectToDatabase($dsn);
$sql5 = <<<EOD
select name, * from article where name = '$stuff2';
EOD;

$stmt5 = $db->prepare($sql5);
$stmt5->execute();
$res5 = $stmt5->fetchAll();
$datatext5 = $res5;
