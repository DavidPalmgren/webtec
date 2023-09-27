<?php

include("../config/config.php");
include("connectUser.php");

$acronym = $_POST["acronym"] ?? null;
$password1 = $_POST["password1"] ?? null;
$password2 = $_POST["password2"] ?? null;

// Check that passwords match
if ($password1 !== $password2) {
    setFlashMessage("warning", "The passwords did not match!");
    redirectTo("create_user.php");
}

// Generate a new password hash from the new password string
$hash = password_hash($password1, PASSWORD_DEFAULT);


$db = connectToDatabase($dsn);

// Create the SQL statement
$sql = <<<EOD
-- Insert a new user
INSERT INTO user
    (acronym, password, role)
VALUES
    (?, ?, 'user')
;
EOD;

// Prepare the SQL statement so it can be executed
$stmt = $db->prepare($sql);
$args = [$acronym, $hash];
$stmt->execute($args);

setFlashMessage("success", "The user was created, you can now login!");
redirectTo("login.php");
