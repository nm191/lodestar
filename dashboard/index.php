<?php
require('../core/config.php');
include_once(DIR_BASE.'includes/header.php');
Protect::mustBeLoggedIn();
$current_user = new User();
Debug::show($current_user);
echo 'dashboard';