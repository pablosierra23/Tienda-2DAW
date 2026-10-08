<?php

require_once __DIR__ . '/DatabaseRepository.php';
require_once __DIR__ . '/producto.php';

class ProductoRepository extends DatabaseRepository
{
    public function findAll(): array
    {
        $conn = $this->connect();
        $result = $conn->query(
            'SELECT ID_Producto, Nombre, Descripcion, Precio, Stock
             FROM producto
             ORDER BY Nombre'
        );

        if ($result === false) {
            $error = $conn->error;
            $conn->close();
            throw new RuntimeException('No se pudieron consultar los productos: ' . $error);
        }

        $productos = [];

        while ($datos = $result->fetch_assoc()) {
            $productos[] = new Producto(
                (int) $datos['ID_Producto'],
                $datos['Nombre'],
                $datos['Descripcion'],
                (float) $datos['Precio'],
                (int) $datos['Stock']
            );
        }

        $result->free();
        $conn->close();

        return $productos;
    }
}