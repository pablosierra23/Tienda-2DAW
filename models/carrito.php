<?php
    class carrito
    {
        private $id;
        private $estado;

        public function __construct($id, $estado = 'activo')
        {
            $this->id = $id;
            $this->estado = $estado;
        }

        public function getId()
        {
            return $this->id;
        }
        public function getEstado()
        {
            return $this->estado;
        }
        public function setEstado($estado)
        {
            $this->estado = $estado;
        }
    }
?>