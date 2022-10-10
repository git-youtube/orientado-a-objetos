<?php 
include 'Ordenador.php';
include 'Despacho.php';
$nombreFichero='guardar.txt';
$_puntuWifi="punto1";
$_puntosRed=3;
$_nombre="despa1";
$despacho=new Despacho($_puntuWifi, $_puntosRed, $_nombre);

function impOrdenadores($ordenadores)
{
    
    // imprimir los ordenadors del fichero
    foreach ($ordenadores as $ordenador) {
        echo $ordenador;
    }
}

function cargarOrdenadores($nombreFichero) {
    //TODO Cargar fichero
    $s = file_get_contents($nombreFichero);
    $ordenadores = unserialize($s);
    return $ordenadores;
}

$ordenadores=cargarOrdenadores($nombreFichero);
$despacho->setOrdenadores($ordenadores);
print_r($despacho);
function guardarOrdenadores($nombreFichero, $ordenador){
    // guardar coches en archivo
    $s = serialize($ordenador);
    // almacenamos $s en algÃºn lugar en el que page2.php puede encontrarlo.
    file_put_contents($nombreFichero, $s);
}





function insertar($SO,$esSobremesa,$codHZ)
{
    global $despacho,$nombreFichero;
    $ordenadores= $despacho->getOrdenadores();
    if (in_array($codHZ,$ordenadores)) {   
        echo "El ordenador ya existe";
    } else {       
        $ordenador=new Ordenador($SO, $codHZ, $esSobremesa);
       $despacho->addOrdenador($ordenador);
       guardarOrdenadores($nombreFichero, $despacho->getOrdenadores());
    } 
}


function eliminar($codHZ) {
    global $despacho,$nombreFichero;
    $ordenadores= $despacho->getOrdenadores();

    if (in_array($codHZ,$ordenadores)) {
        $ordenador=$ordenadores[$codHZ];
    
        $despacho->deleteOrdenador($ordenador);
        guardarOrdenadores($nombreFichero, $despacho->getOrdenadores());
    } else { 
        echo "El ordenador no se ha podido eliminar porque no existe";
        
    }
}

function modificar($codHz,$SO,$esSobremesa) {
    global $despacho,$nombreFichero;
    $ordenadores= $despacho->getOrdenadores();
    
    if (in_array($codHz,$ordenadores)) {
        $ordenador=$ordenadores[$codHz];
        $ordenador->setSO($SO);
        $ordenador->setEsSobremesa($esSobremesa);
        $despacho->updateOrdenador($ordenador);
        guardarOrdenadores($nombreFichero, $despacho->getOrdenadores());
    } else {
        echo "El ordenador no se ha podido modificar porque no existe";
        
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
            value="esSobreMesa">Sobremesa <input name="action" type="submit" value="Guardar"> <input name="action"
            type="reset" value="Update"> <input name="action" type="submit" value="Borrar">
    </form>
    <?php
$accion=$_GET["action"];
if($accion=="Guardar"){
    $SO=$_GET['SO'];
    $codHZ=$_GET['CodHZ'];
    $esSobremesa=$_GET['esSobreMesa'];
    insertar($SO, $esSobremesa, $codHZ); 
}elseif ($accion=="Borrar"){
    $codHZ=$_GET['CodHZ'];
    eliminar($codHZ);
}else {
    $SO=$_GET['SO'];
    $codHZ=$_GET['CodHZ'];
    $esSobremesa=$_GET['esSobreMesa'];modificar($codHZ, $SO, $esSobremesa);
    modificar($codHZ, $SO, $esSobremesa);
}
echo cargarOrdenadores($nombreFichero);
?>
</body>
</html>