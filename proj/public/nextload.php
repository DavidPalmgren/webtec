
<?php

$db = connectToDatabase($dsn);
$sql7 = <<<EOD
select id from article
EOD;
$stmt7 = $db->prepare($sql7);
$stmt7->execute();
$res7 = $stmt7->fetchAll();
$datatext7 = $res7[$nextload];
print_r($datatext7);
