<?php
/*CALCULADORA DE TIEMPO DE RENDERIZACION */
$GB=$_POST["txtGB"];
$pxmin=3;//tiempo que tarda en procesar por minuto
$tiempototal=$GB*$pxmin;
echo "tiempo total que tomo procesar ".$GB.": ".$tiempototal." minutos";
?>