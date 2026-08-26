<?php
//genera aleatorio
 $probabilidad=rand(1,100);

 //evaluamos (5% de chance de lengendaria)
 if($probabilidad<=5){
    $recompensa=" 🏆¡SKIN LEGENDARIO!";
 }
 else{
  $recompensa=" 🪙 100 Monedas de oro.";
 }
 
 echo "Numero suerte: ".$probabilidad."<br>";
 echo "Drop: ".$recompensa;

?>