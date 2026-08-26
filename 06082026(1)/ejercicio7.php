<?php
$fuerza=$_POST["txtfuerza"];
$mochila=$_POST["cmbmochila"];


if($mochila==="si"&& $fuerza>0 ){
echo "puedes llevar el item en el inventario";
}else if($mochila==="no"&&$fuerza>50){
   echo "puedes llevar el item en el inventario"; 
}else if($mochila==="no"&&$fuerza<50){
   echo "no puedes llevar el item en el inventario debido a tu poca fuerza"; 
}


?>