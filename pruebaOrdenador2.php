<?php
include 'Ordenador.php';
$ordenador0=new ordenador("Windows","HZ4521",true);
$ordenador1=new ordenador("Linux","HZ7895",false);
$ordenador2=new ordenador("Windows","HZ1247",false);
$ordenador3=new ordenador("Mac","HZ0189",true);
$ordenador4=new ordenador("Ubuntu","HZ1045",true);
$ordenador5=new ordenador("Windows","HZ4128",false);

$ordenadores=array($ordenador0,$ordenador2,$ordenador3,$ordenador4,$ordenador5);
foreach ($ordenadores as $ordenador) {
    echo $ordenador->imprimir();
}
?>
