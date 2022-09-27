<?php
class CentroFP{
    private $cod;
    private $nombre;
    private $espacios=array();
    

    function __construct($_cod,$_nombre) {
       $this->cod=$_cod;
       $this->nombre=$_nombre;
    }
    
    /**
     * @param mixed $cod
     */
    public function setCod($cod)
    {
        $this->cod = $cod;
    }

    /**
     * @param mixed $nombre
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    }

    public function getCod()
    {
        return $this->cod;
    }
    
    public function getNombre()
    {
        return $this->nombre;
    }
    
    /**
     * @return multitype:
     */
    public function getEspacios()
    {
        return $this->espacios;
    }
    
    /**
     * @param multitype: $espacios
     */
    public function setEspacios($espacios)
    {
        $this->espacios = $espacios;
    }
    
    public function addEspacio($espacio){
        $this->espacios[]=$espacio;
    }
    
}
?>