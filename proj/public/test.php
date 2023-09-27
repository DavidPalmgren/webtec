<?php

include('connectUser.php');

$db = connectToDatabase($dsn);
$sql = <<<EOD
select * from object;
EOD;

$stmt = $db->prepare($sql);
$stmt->execute();
$res = $stmt->fetchAll();
$datatext = $res;
