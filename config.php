<?php

$host = getenv("MYSQL_SERVICE_HOST") ?: "localhost";
$dbname = "animals";
$user = "datawriter";
$password = "write123";

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $user, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {

    // escribir error en los logs
    error_log("ERROR: No se pudo conectar a la base de datos MySQL en host '$host'. Detalle: " . $e->getMessage());

    // mensaje genérico al usuario
    die("ERROR: No se pudo conectar a la base de datos MySQL en host '$host'. Detalle: " . $e->getMessage());
}

?>
