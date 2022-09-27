<?php
class Aula extends Espacio{
    private $numero="";
    private $proyector=false;
    private $pizarraDigital=false;
    private $pantallaTactil=false;
    
    function __construct($_puntuWifi,$_puntosRed,$_numero,$_proyector,$_pizarraDigital,$_pantallaTactil) {
        parent::__construct($_puntuWifi, $_puntosRed);
        $this->numero=$_numero;
        $this->proyector=$_proyector;
        $this->pizarraDigital=$_pizarraDigital;
        $this->pantallaTactil=$_pantallaTactil;
    }
    
    /**
     * @return string
     */
    public function getNumero()
    {
        return $this->numero;
    }

    /**
     * @return boolean
     */
    public function getProyector()
    {
        return $this->proyector;
    }

    /**
     * @return boolean
     */
    public function getPizarraDigital()
    {
        return $this->pizarraDigital;
    }

    /**
     * @return boolean
     */
    public function getPantallaTactil()
    {
        return $this->pantallaTactil;
    }

    /**
     * @param string $numero
     */
    public function setNumero($numero)
    {
        $this->numero = $numero;
    }

    /**
     * @param boolean $proyector
     */
    public function setProyector($proyector)
    {
        $this->proyector = $proyector;
    }

    /**
     * @param boolean $pizarraDigital
     */
    public function setPizarraDigital($pizarraDigital)
    {
        $this->pizarraDigital = $pizarraDigital;
    }

    /**
     * @param boolean $pantallaTactil
     */
    public function setPantallaTactil($pantallaTactil)
    {
        $this->pantallaTactil = $pantallaTactil;
    }

    
}