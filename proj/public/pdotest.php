
<?php

include('connectUser.php');

$stuff = $_GET['page'] ?? "";

$db = connectToDatabase($dsn);
$sql2 = <<<EOD
select name, * from object where name = '$stuff';
EOD;

$stmt2 = $db->prepare($sql2);
$stmt2->execute();
$res2 = $stmt2->fetchAll();
$datatext2 = $res2;
