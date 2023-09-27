
<?php

$fileName = "db/db.sqlite";
if ($_SERVER["SERVER_NAME"] !== "www.student.bth.se") {
    $fileName = "C:\db\db.sqlite";
}
$dsn = "sqlite:$fileName";
include('../../functions/functionsSQL.php');

// Open the database file and set some attributes on interface
// and catch the exception if it fails.
$db = connectToDatabase($dsn);

// Print out the success
echo "<p>The database at '$dsn' is now connected.<p>Dumping the database connection:<pre>";
var_dump($db);
