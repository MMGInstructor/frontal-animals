<?php

require_once "db.php";

$db = getDB();

if ($db === null) {
    http_response_code(500);
    echo "NOT READY";
    exit;
}

try {

    $db->query("SELECT 1");

    echo "READY";

} catch (Exception $e) {

    error_log("READINESS CHECK FAILED ".$e->getMessage());

    http_response_code(500);
    echo "NOT READY";
}

?>
