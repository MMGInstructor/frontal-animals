<?php

ini_set('log_errors', 1);
ini_set('display_errors', 0);

$DB_HOST = getenv("MYSQL_SERVICE_HOST") ?: "localhost";
$DB_NAME = getenv("MYSQL_DATABASE") ?: "animals";
$DB_USER = getenv("MYSQL_USER") ?: "datawriter";
$DB_PASS = getenv("MYSQL_PASSWORD") ?: "write123";

?>
