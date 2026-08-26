<?php

if(isset($_POST["btnenviar"])){
    
//tomar los valores de html
 $nombre=$_POST["txtnombre"];
 $apellido=$_POST["txtapellido"];
 $estado=$_POST["radcivil"];
 $ciudad=$_POST["cmbciudad"];
 $codigo=$_POST["txtcontrasena"];   

 if($codigo == "12345678"){
 echo"<strong>Sr/a:</strong>".$nombre." ".$apellido;

 }else{
    echo"Error satos incorectos";
 }
echo"<br><a href='ejercicio2.html'>Cargar mas datos</a>";
}else{
    echo"No tiene acceso";
}

?>