<?php
$cont=0;
echo "RESULTADOS: <br>";
for($i=0;$i<100;++$i){
    $dado=rand(1,6);
echo $dado."  ";
if($dado==6){
    ++$cont;
}
}
echo"<br> las veces que salio 6 en los 100 lanzamientos es de: ".$cont;
?>