<?php
$recarga=$_POST["txtrecarga"];

if($recarga < 50){
    $mensaje="Execelente";

}else if($recarga > 50 && $recarga <120){
    $mensaje="Aceptable";
}else if($recarga > 120){
    $mensaje="Conexion inestables";
}
echo" ".$mensaje;
?>