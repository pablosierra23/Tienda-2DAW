<?php

require_once __DIR__ . '/../bd.php';

abstract class DatabaseRepository
{
    protected function connect(): mysqli
    {
        $conn = bd::connect();

        if ($conn->connect_errno) {
            throw new RuntimeException(
                'No se pudo conectar con la base de datos: ' . $conn->connect_error
            );
        }

        return $conn;
    }
}