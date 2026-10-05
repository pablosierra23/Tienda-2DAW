<?php
    class Producto
    {
        private $id;
        private $nombre;
        private $descripcion;
        private $precio;
        private $stock;

        public function __construct($id, $nombre, $descripcion, $precio, $stock)
        {
            $this->id = $id;
            $this->nombre = $nombre;
            $this->descripcion = $descripcion;
            $this->precio = $precio;
            $this->stock = $stock;
        }

        public function getId()
        {
            return $this->id;
        }

        public function getNombre()
        {
            return $this->nombre;
        }

        public function getDescripcion()
        {
            return $this->descripcion;
        }

        public function getPrecio()
        {
            return $this->precio;
        }

        public function getStock()
        {
            return $this->stock;
        }
        public function setStock($stock)
        {
            $this->stock = $stock;
        }
        public function setPrecio($precio)
        {
            $this->precio = $precio;
        }
        public function setDescripcion($descripcion)
        {
            $this->descripcion = $descripcion;
        }   
        public function setNombre($nombre)  
        {
            $this->nombre = $nombre;
        }
    
    }
?>