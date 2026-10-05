<?php

require_once __DIR__ . '/bd.php';

$conn = bd::connect();

if ($conn->connect_errno) {
    die('Conexión fallida: ' . $conn->connect_error);
}

$conn->set_charset('utf8mb4');
?>
