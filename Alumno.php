<?php
class Alumno extends Persona{
    private $codMatricula="";
    private $ciclo="";
    private $docente;
   

    function __construct($_name,$_dni,$_email,$_codMatricula,$_ciclo) {
        parent::__construct($_name, $_dni, $_email);
        $this->codMatricula=$_codMatricula;
        $this->ciclo=$_ciclo;
    }
    
    
    /*  function __construct($_name,$_dni,$_email) {
        parent::__construct($_name, $_dni, $_email);
    }
     */
    
    /**
     * @return string
     */
    public function getCiclo()
    {
        return $this->ciclo;
    }
    
    /**
     * @param string $ciclo
     */
    public function setCiclo($ciclo)
    {
        $this->ciclo = $ciclo;
    }
    
    public function getcodMatricula()
    {
        return $this->codMatricula;
    }
    
    public function setcodMatricula($codMatricula)
    {
        $this->codMatricula = $codMatricula;
    }
    
    
    /**
     * @return mixed
     */
    public function getDocente()
    {
        return $this->docente;
    }
    
    /**
     * @param mixed $docente
     */
    public function setDocente($docente)
    {
        $this->docente = $docente;
    }
    
}