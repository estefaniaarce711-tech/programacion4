<?php 
$like=$_POST["txtlike"];
$vistas=$_POST["txtvista"];
$tasa=10;// el video cumple con la tasa de interacion

$viral=($like/$vistas)*100;
if($viral>$tasa){
    echo "Video viral";
}else{
    echo "Te hacen falta mas likes!!!";

}

?>