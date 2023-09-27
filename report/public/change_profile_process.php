<?php

include("../config/config.php");
include("connectUser.php");

$user = checkIfUserLoggedInOrRedirectToLogin();

$newname = $_POST["newname"] ?? "didnwork";
$newavatar = $_POST["newavatar"] ?? "";
$newsignature = $_POST["newsignature"] ?? "";




$db = connectToDatabase($dsn);

$sql = <<<EOD
UPDATE user SET
    name = ?,
    avatar = ?,
    signature = ?
WHERE
    acronym = ?
;
EOD;


$stmt = $db->prepare($sql);
$args = [$newname,$newavatar,$newsignature, $user];
$stmt->execute($args);

setFlashMessage("success", "Your profile has now been updated!");
redirectTo("user.php");
