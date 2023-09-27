<?php

include('connectUser.php');

$db = connectToDatabase($dsn);
$sql = <<<EOD
select * from article;
EOD;

$stmt = $db->prepare($sql);
$stmt->execute();
$res = $stmt->fetchAll();
$datatext4 = $res;
