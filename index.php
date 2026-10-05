<?php


$env = parse_ini_file(__DIR__ . '/.env');   
foreach ($env as $key => $value) {
    putenv("$key=$value");
}

$conn = bd::connect();

if ($conn->connect_errno) {
    die('Conexión fallida: ' . $conn->connect_error);
}

$conn->set_charset('utf8mb4');
?>
