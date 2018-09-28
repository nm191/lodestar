<?php
session_start();
echo 'You are being logged out...';
session_destroy();
header('Location: /index.php');