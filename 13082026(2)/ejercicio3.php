<?php

 $opcion=$_POST["rdmoneda"];

 $aleatorio=rand(0,1);
 if($aleatorio== 0 && $opcion=="Cara"){
    echo "Felicidades haz ganado el juego del lanzamiento de la moneda, salio cara";
 }else if($aleatorio== 1 && $opcion=="Cara"){
echo "Haz perdido el lanzamiento de la moneda, salio cruz";
 }else if($aleatorio== 1 && $opcion=="Cruz"){
 echo "Felicidades haz ganado el juego del lanzamiento de la moneda,salio cruz";
 }else{
    echo "Haz perdido el lanzamiento de la moneda, salio cara";
 }

?>