<?php

include('../config/config.php');

if (is_readable("c:\db\db.sqlite")) {
    $fileName = "c:\db\db.sqlite";
} else {
    $fileName = "../db/db.sqlite";
}
$dsn = "sqlite:$fileName";

// Open the database file and set some attributes on interface
// and catch the exception if it fails.
$db = connectToDatabase($dsn);

// Print out the success
echo "The database at '$dsn' is now connected.<p>Dumping the database connection:";
var_dump($db);
