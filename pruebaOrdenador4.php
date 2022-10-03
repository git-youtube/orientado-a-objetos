<?php 
include 'Ordenador.php';

function impOrdenadores($ordenadores)
{
    
    // imprimir los ordenadors del fichero
    foreach ($ordenadores as $ordenador) {
        echo $ordenador;
    }
}

function insertar($ordenadores,$ordenadorNuevo,$codHZ)
{
    
    if (in_array($codHZ, $ordenadores)) {        
    } else {        
        $ordenadores[] = $ordenadorNuevo;
        echo $ordenadorNuevo;
        ordenador::guardarSerializado('guardar.txt', $ordenadores);     
    } 
}

function eliminar($codHZ, $ordenadores,$ordenadorNuevo) {
   
    if ( $codHZ != NULL) {
        if (array_key_exists($codHZ, $ordenadorNuevo)) {
            
            echo "<script> alert 'Escribe un codigo HZ nuevo'</script>";
        }
        
    }
}

?>
<!DOCTYPE html>
<html>
<head>
<title>Insert coche</title>
<meta charset="UTF-8">
</head>
<body>

    <form>
        <input name="SO" placeholder="SO"> <input name="CodHZ"
            placeholder="CodHZ"> <input name="esSobreMesa" type="checkbox"
            value="esSobreMesa">Sobremesa <input type="submit" value="Guardar"> <input
            type="reset" value="Remove"> <input type="submit" value="Borrar">
    </form>
    <?php

$ordenadores = ordenador::getOrdenaUnselizados('guardar.txt');

impOrdenadores($ordenadores);

if (isset($_GET['SO']) && isset($_GET['CodHZ'])) {
    
    $SO = $_GET['SO'];
    $CodHZ = $_GET['CodHZ'];
    $esSobreMesa = isset($_GET['esSobreMesa']);
   
    if ($SO != NULL && $CodHZ != NULL ) { // se ha rellenado el form
        // echo "se va ha crear el ordenador";
        
        $ordenadorNuevo = new ordenador($SO, $CodHZ, $esSobreMesa);
        insertar($ordenadores,$ordenadorNuevo,$CodHZ);       
    }
}
?>
</body>
</html>