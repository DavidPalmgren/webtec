
<?php
//Skapa en DSN.
//Koppla oss mot databasen via dess DSN.
//Skapa SQL-satsen.
//Förbereda SQL-satsen så att den kan köras.
//Kör SQL-satsen mot databasen.
//Hämta resultatet, kallas också “resultset”, från databasfrågan.
//Visa innhåller i resultsetet.

include('connect.php');

$db = connectToDatabase($dsn);

// Create the SQL statement
$sql = <<<EOD
SELECT
    rowid,
    *
FROM namnlista
WHERE
    namn = ?
    OR namn = ?
    OR namn = ?
;
EOD;

// Prepare the SQL statement so it can be executed
$stmt = $db->prepare($sql);

// Execute the SQL statement towards the database



$args = ['Mikael', 'Carina', 'Magnus'];

$stmt->execute($args);



// Get the resultset and print it out
$res = $stmt->fetchAll();
include('view/table.php');
