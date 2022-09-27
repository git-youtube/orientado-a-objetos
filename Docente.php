<?php
class Docente extends Persona{
    private $sueldo=0;
    private $alumnos=array();
    private $ordenador;
   

    function __construct($_name,$_dni,$_email,$_sueldo) {
        parent::__construct($_name, $_dni, $_email);
        $this->sueldo=$_sueldo;
    }
    
    
   /* function __construct($_name,$_dni,$_email) {
        parent::__construct($_name, $_dni, $_email);
    }
    */
    
    
    /**
     * @return int
     */
    public function getSueldo()
    {
        return $this->sueldo;
    }
    
    /**
     * @param int $sueldo
     */
    public function setSueldo($sueldo)
    {
        $this->sueldo = $sueldo;
    }
    
    /**
     * @return multitype:
     */
    public function getAlumnos()
    {
        return $this->alumnos;
    }
    
    /**
     * @param multitype: $alumnos
     */
    public function setAlumnos($alumnos)
    {
        $this->alumnos = $alumnos;
    }
    
    public function addAlumno($alumno){
        $this->alumnos[]=$alumno;
        //array_push($this->alumnos,$alumno)
    }
    
}