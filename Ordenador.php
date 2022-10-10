<?php

class Ordenador {
    private $SO="";
    private $CodHZ="";
    private $esSobremesa=false;
    private $despacho;
    
    function __construct($_SO,$_CodHZ,$esSobremesa) {
        $this->SO=$_SO;
        $this->CodHZ=$_CodHZ;
        $this->esSobremesa=$esSobremesa;
    }
    /**
     * @return string
     */
    public function getSO()
    {
        return $this->SO;
    }
    
    /**
     * @return mixed
     */
    public function getCodHZ()
    {
        return $this->CodHZ;
    }
    
    /**
     * @param string $SO
     */
    public function setSO($SO)
    {
        $this->SO = $SO;
    }
    
    /**
     * @param mixed $CodHZ
     */
    public function setCodHZ($CodHZ)
    {
        $this->CodHZ = $CodHZ;
    }
    
    public function imprimir(){
        return "<h1>".$this->SO."</h1>"
            ."<h2>".$this->CodHZ."</h2>"
                .($this->esSobremesa ?"<h3 style='color:green'>VERDADERO</h3>" :"<h3 style='color:red'>FALSO</h3>");
    }
    public function __toString() {
        
        return "<h1 style='border:1px solid black;'>".$this->SO ."</h1>"."<h2 style='border:1px solid black;'>".$this->CodHZ."</h2>"
            .($this->esSobremesa ?"<h3 style='color:green; border:1px solid black;'>ORDENADOR SOBREMESA</h3>" :"<h3 style='color:blue;border:1px solid black;'>PORTATIL</h3>");
    }
    
 
   
}

