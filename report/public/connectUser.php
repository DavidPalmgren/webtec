<?php

if (is_readable("c:\db\user.sqlite")) {
    $fileName = "c:\db\user.sqlite";
} else {
    $fileName = "../db/user.sqlite";
}
$dsn = "sqlite:$fileName";
$db = connectToDatabase($dsn);
