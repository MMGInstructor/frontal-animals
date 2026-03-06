<?php

require_once "config.php";

function getDB() {

    global $DB_HOST, $DB_NAME, $DB_USER, $DB_PASS;

    try {

        $pdo = new PDO(
            "mysql:host=$DB_HOST;dbname=$DB_NAME;charset=utf8",
            $DB_USER,
            $DB_PASS
        );

        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        return $pdo;

    } catch (PDOException $e) {

        error_log("DATABASE CONNECTION ERROR: host=$DB_HOST db=$DB_NAME error=".$e->getMessage());

        return null;
    }
}

?>
