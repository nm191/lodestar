<?php
define('DIR_BASE', dirname( dirname( __FILE__ ) ) . '/');
define('ROOT', $_SERVER['HTTP_HOST']);
define('PUBLIC_ROOT', $_SERVER['HTTP_HOST'].'/public/');
define('CLASSES_ROOT', $_SERVER['HTTP_HOST'].'/core/classes/');

include_once('autoloadclasses.php');
