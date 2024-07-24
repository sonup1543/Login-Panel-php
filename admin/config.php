<?php
define('DB_NAME', 'lainteriors_in_taarefai_la');
define('DB_USER', 'lainteriors_in_taarefai_la');
define('DB_PASSWORD', 'taarefa_la');
define('DB_HOST', 'lainteriors.in.mysql');

$link = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

if (!$link) {
    die('Could not connect: ' . mysqli_connect_error());
    error_reporting(E_ALL);
    ini_set('display_errors', 1);
}
?>
