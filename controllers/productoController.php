<?php

require_once __DIR__ . '/../models/ProductoRepository.php';

class ProductoController
{
    public function listar(): array
    {
        return (new ProductoRepository())->findAll();
    }
}
