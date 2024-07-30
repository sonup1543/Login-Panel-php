<?php

define('DB_NAME', 'ingeniousresults');
define('DB_USER', 'ingeniousresults');
define('DB_PASSWORD', '*Xb12k0f3');
define('DB_HOST', 'p3nlmysql137plsk.secureserver.net:3306');

error_reporting(E_ALL);
ini_set('display_errors', 1);

$link = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

if (!$link) {
    die('Could not connect: ' . mysqli_error($link));
}
?>
