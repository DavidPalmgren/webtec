<?php

$title = 'Search';
include('../view/header.php');
include('connect.php');


$query = $_GET['query'] ?? null;


$db = connectToDatabase($dsn);

// Create the SQL statement
$sql = <<<EOD
SELECT
    rowid,
    *
FROM namnlista
WHERE
    namn LIKE ?


;
EOD;

$sql2 = <<<EOD
SELECT
    rowid,
    *
FROM namnbetydelse
WHERE
    namn LIKE ?


;
EOD;

$args = [$query];
$stmt = $db->prepare($sql);
$stmt2 = $db->prepare($sql2);
$stmt->execute($args);
$stmt2->execute($args);
$res = $stmt->fetchAll();
$res2 = $stmt2->fetchAll();

include('../view/searchview.php');?>
<a href="http://validator.w3.org/unicorn/check?ucn_uri=referer&amp;ucn_task=conformance">Unicorn</a>

<?php
if ($res) {
    include('../view/tablesearch.php');
}
if (!$res) {
    echo 'Found nothing.';
}

