
<?php
$edadUsuario=$_POST["txtedad"];
echo "=== PLATAFORMA STREAMING === <br>";
 if($edadUsuario>=18){
    echo "Estado:[Acceso Total] <br>";
    echo "Catalogo Completo(R/M).";
 }
 else{
    echo "Estado: [MODO FAMILIAR] <br>";
    echo "Clasifiacion PG-13.";
 }
 ?>