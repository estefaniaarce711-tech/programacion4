<?php
//entradas
$episodiosvistos=5;
$duracionminutos=45;
//procesamiento
$totalminutos=$episodiosvistos*$duracionminutos;
//calcular las horas enteras usando intdiv() y el resto en minutos con el operador modulo(%)
$horas=intdiv($totalminutos,60);
$minutosrestantes=$totalminutos%60;
echo "===ESTADISTICAS DE ESTREAMING===<br>";
echo "Tiempo total reproducido: ".$horas." horas y ".$minutosrestantes." minutos <br>";
//evaluamos si supera o iguala las 10 horas(600 minutos)
if($totalminutos>=600){
    echo "🏆INSIGNIA OTORGADA: super fan de la serie <br>";
}else{
    echo "📺SIGUE DISFRUTANDO PARA DESBLOQUEAR LA INSIGNIA super fan<br>";
}


?>