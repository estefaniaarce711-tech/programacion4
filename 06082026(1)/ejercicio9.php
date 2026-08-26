<?php
//simulador de recarga de moneda 
 $recarga=$_POST["txtrecarga"];
 $coins=100;
 if($recarga>50){
    $bono=500;
    $coinsfinal=$recarga*$coins;
    $total=$bono+$coinsfinal;
    echo "uste tiene ".$coinsfinal."coins mas un bono adiccioal de".$bono." por su recarga<br>";
    echo "TOTALDE COINS: ".$total"<br>";
 }else{
    $coinsfinal=$recarga*$coins; 
    echo"Uste tiene ".$coinsfinal."coins";
 }

?>