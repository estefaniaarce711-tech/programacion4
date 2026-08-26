<?php

if(isset($_POST["btnenviar"])){
    
//tomar los valores de html
 $nombre=$_POST["txtnombre"];
 $apellido=$_POST["txtapellido"];
 $estado=$_POST["radcivil"];
 $ciudad=$_POST["cmbciudad"];
 $codigo=$_POST["txtcontrasena"];   

if ($codigo == "12345678") {
    echo 
    '<fieldset>
            <legend>Datos personales</legend>
            <br>
            <strong>Sr/a:</strong> ' . $nombre . ' ' . $apellido . '<br>
            <strong>Estado civil:</strong> ' . $estado . '<br>
            <strong>Ciudad:</strong> ' . $ciudad . '
          </fieldset>';
} else{
    echo
     '<fieldset>
            <legend>error</legend>
            <br>
             Error datos incorectos<br>
         
          </fieldset>';
 
 }
echo"<br><a href='ejemplo2.html'>Cargar mas datos</a>";
}else{
    echo"No tiene acceso";
}

?>