<?php 
//generamos aleatorio(1-100)
$probabilidad=rand(1,100);
if($probabilidad<=5){
    $recompensa='🏆skin legendario obtenido';
}else{
$recompensa='recompensa estandar 100 monedas de oro🪙';
}
echo "tu numero de la suerte fue: ".$probabilidad."<br>";
echo "resultado de drop: ".$recompensa;


?>