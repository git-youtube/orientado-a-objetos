<?php
include 'Espacio.php';
class Despacho extends Espacio{
    private $nombre;
    private $docentes=array();
    private $ordenadores=array();
    
 

    function __construct($_puntuWifi,$_puntosRed,$_nombre) {
        parent::__construct($_puntuWifi, $_puntosRed);
        $this->nombre=$_nombre;
    }
    
    public function setNombre($nombre) {
        $this->nombre = $nombre;
    }
    
    public function getNombre() {
        return $this->nombre;
    }
    
    /**
     * @return multitype:
     */
    public function getDocentes()
    {
        return $this->docentes;
    }
    
    /**
     * @return multitype:
     */
    public function getOrdenadores()
    {
        return $this->ordenadores;
    }
    
    /**
     * @param multitype: $docentes
     */
    public function setDocentes($docentes)
    {
        $this->docentes = $docentes;
    }
    
    /**
     * @param multitype: $ordenadores
     */
    public function setOrdenadores($ordenadores)
    {
        $this->ordenadores = $ordenadores;
    }
    
    public function addDocente($docente){
        $this->docentes[]=$docente;
    }
    
    public function addOrdenador($ordenador){
        $this->ordenadores[$ordenador->getCodHZ()]=$ordenador;
    }
    
    public function deleteOrdenador($ordenador) {
        unset($this->ordenadores[$ordenador->getCodHZ()]);
    }
    
    public function updateOrdenador($ordenador) {
        $this->ordenadores[$ordenador->getCodHZ()]=$ordenador;
    }
   
   
    
}

