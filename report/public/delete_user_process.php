<?php

// Include the config file
include("../config/config.php");
include("connectUser.php");
// Get the current user from the session
$user = checkIfUserLoggedIn();

// Get incoming from post form
$doit = $_POST["doit"] ?? null;

// Check if the form was submitted
if (!$doit) {
    die("Reeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeee");
}


$db = connectToDatabase($dsn);

// Create the SQL statement
$sql = <<<EOD
-- Delete a user
DELETE FROM user
WHERE
    acronym = ?
;
EOD;

$stmt = $db->prepare($sql);
$args = [$user];
$stmt->execute($args);

setFlashMessage("success", "The user was deleted!");
redirectTo("logout_process.php");
