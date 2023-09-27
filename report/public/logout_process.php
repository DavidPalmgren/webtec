<?php

include('../config/config.php');

unset($_SESSION['user']);

setFlashMessage('Success', "user has logged out");
header("Location: login.php");
exit();
