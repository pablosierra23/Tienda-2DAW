<?php

class Pedido {
    private $id;
    private $usuarioId;
    private $fecha;
    private $total;
    private $carrito=[];
    

    public function __construct($id, $usuarioId, $fecha, $total) {
        $this->id = $id;
        $this->usuarioId = $usuarioId;
        $this->fecha = $fecha;
        $this->total = $total;
    }

    public function getId() {
        return $this->id;
    }

    public function getUsuarioId() {
        return $this->usuarioId;
    }

    public function getFecha() {
        return $this->fecha;
    }

    public function getTotal() {
        return $this->total;
    }

    
    public function setUsuarioId($usuarioId) {
        $this->usuarioId = $usuarioId;
    }

    public function setFecha($fecha) {
        $this->fecha = $fecha;
    }

    public function setTotal($total) {
        $this->total = $total;
    }

}   

?>