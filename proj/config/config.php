<?php

error_reporting(-1);
ini_set('display_errors', '1');


// Start the named session,
// the name is based on the path to this file.
$name = preg_replace("/[^a-z\d]/i", "", __DIR__);
session_name($name);
session_start();

//asdasdasd
include("../src/functions.php");
