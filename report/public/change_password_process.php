<?php

include("../config/config.php");
include("connectUser.php");

$user = checkIfUserLoggedInOrRedirectToLogin();


$password1 = $_POST["newpassword1"] ?? null;
$password2 = $_POST["newpassword2"] ?? null;


if ($password1 !== $password2) {
    setFlashMessage("warning", "The passwords did not match!");
    redirectTo("change_password.php");
}

$hash = password_hash($password1, PASSWORD_DEFAULT);
$db = connectToDatabase($dsn);

$sql = <<<EOD
UPDATE user SET
    password = ?
WHERE
    acronym = ?
;
EOD;


$stmt = $db->prepare($sql);
$args = [$hash, $user];
$stmt->execute($args);

setFlashMessage("success", "Your password has now been changed!");
redirectTo("user.php");
