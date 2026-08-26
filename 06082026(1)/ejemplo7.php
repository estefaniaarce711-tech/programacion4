<?php
//entradas
$kills=8;
$deaths=2;
$assists=10;
//procesamiento
$puntosKDA=($kills*3)+($assists*1)-($deaths*2);
echo "===PERFOMANCE E-SPORTS EVALUATOR===<BR>";
echo "Kills:$kills |Deaths:$deaths| Assists:$assists <br> ";
echo "Puntaje KDA calculado: ".$puntosKDA."pts<br>";
if($puntosKDA>=20){
    echo "🌟Clasificacion :Jugador MVT(most valuable teammate)<br>";
}else{
   echo "Rango :Rendimiento estandar en partida <br>";  
}

?>