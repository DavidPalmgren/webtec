
<?php
include('connect.php');
$db = connectToDatabase($dsn);

// Create the SQL statement

$name = $_GET['name'] ?? null;


if (!$name) {
    die("Vous devez soumettre une chaîne de requête! ^ \n skicka in en querysträng fö faaa t.ex.?name=David");
}
$sql = <<<EOD
SELECT
    rowid,
    *
FROM namnlista
WHERE
    namn = ?
;
EOD;

// Prepare the SQL statement so it can be executed
$stmt = $db->prepare($sql);

// Execute the SQL statement towards the database
$args = [$name];
$stmt->execute($args);

// Get the resultset and print it out
$res = $stmt->fetch();
//echo "<pre>", print_r($res, true), "</pre>";
include('view/single.php');
