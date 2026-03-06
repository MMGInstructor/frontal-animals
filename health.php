<?php

require_once "db.php";

$db = getDB();

if ($db === null) {
    http_response_code(500);
    echo "DB connection failed";
    exit;
}

try {

    $stmt = $db->query("SELECT 1");

    if ($stmt) {
        echo "OK";
    }

} catch (Exception $e) {

    error_log("HEALTHCHECK ERROR: ".$e->getMessage());

    http_response_code(500);
    echo "DB query failed";
}

?>
