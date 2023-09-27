<?php

include("../config/config.php");
include('connectUser.php');
$db = connectToDatabase($dsn);
require "../view/loginheader.php";
$user = $_GET['user'] ?? null;
if (!$user) {
    die("Thou shall not pass!");
}

// Create the SQL statement
$sql = <<<EOD
SELECT
    rowid,
    acronym,
    name,
    role,
    avatar,
    signature
FROM user
WHERE
    acronym = ?
;
EOD;

$stmt = $db->prepare($sql);
$args = [$user];
$stmt->execute($args);
$res = $stmt->fetch();

if (!$res) {
    die("There is nothing here.");
}

require "../view/profile.php";
