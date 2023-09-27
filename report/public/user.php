<?php

include("../config/config.php");
$user = checkIfUserLoggedInOrRedirectToLogin();
include('../view/loginheader.php');
include("connectUser.php");

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

require "../view/user.php";
include('../view/footer.php');
