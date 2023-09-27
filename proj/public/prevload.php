
<?php

$db = connectToDatabase($dsn);
$sql6 = <<<EOD
select id from article
EOD;
$stmt6 = $db->prepare($sql6);
$stmt6->execute();
$res6 = $stmt6->fetchAll();
$datatext6 = $res6[$prevload];

#eod för current page -1

print_r($datatext6);
