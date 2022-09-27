<?php
class Variado extends Espacio{
    private $tipo="";
    
    
    function __construct($_puntuWifi,$_puntosRed,$_tipo) {
        parent::__construct($_puntuWifi, $_puntosRed);
        $this->tipo=$_tipo;
    }
    
    public function setTipo($nombre) {
        $this->tipo = $tipo;
    }
    
    public function getTipo() {
        return $this->tipo;
    }
    
}