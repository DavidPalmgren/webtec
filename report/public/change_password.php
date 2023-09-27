<?php

include("../config/config.php");

$user = checkIfUserLoggedInOrRedirectToLogin();

include("../view/loginheader.php");
include("../view/change_password.php");
