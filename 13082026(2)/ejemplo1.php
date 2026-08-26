<?php
/*
$nombre='juan';
echo "Practica de PHP <BR>";
echo "hola $nombre";

echo"<p style='border: 1px solid red; color:blue;'>Estamos practicando ph, para ver el uso de las comillas</p";
*/
$fruta=array("manzna","banana","frutilla");
$contador=count($fruta);


echo $fruta[0];
for($i=0;$i<$contador;++$i){
    echo $fruta[$i]."<br>";
}

$personas=array("nombre"=> "analia","edad"=> 18);
foreach($personas as $persona){
    echo $persona."<br>";
}

for($i=0;$i<2;++$i){
    echo $personas[$i]."<br>";
}

$n1=10;
$n2=2;
$total=$n1/$n2;
$total=intdiv($n1/$n2);

?>