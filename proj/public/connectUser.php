<?php

if (is_readable("c:\db\bvm.sqlite")) {
    $fileName = "c:\db\bvm.sqlite";
} else {
    $fileName = "../db/nvm.sqlite";
}
$dsn = "sqlite:$fileName";
$db = connectToDatabase($dsn);
