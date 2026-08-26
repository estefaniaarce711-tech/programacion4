<?php
//Entrada 
 $nombrepersonaje="fuka";
 $xpactual=380;
 $xprequerido=500;

 //Prosesamiento y logica
 echo "=== SISTEMA DE NIVEL RPG=== <br>";
 echo "Personaje: ".$nombrepersonaje."<br>";
 echo "XP actual: ".$xpactual."/".$xprequerido."<br>";
  if($xpactual>=$xprequerido){
    $nuevonivel=2;
     echo "🎊Felicitaciones has alcazado el nivel ".$nuevonivel."<br>";
  }else{
    $xpfaltante=$xprequerido - $xpactual;
    echo " ⚔️ Todavia estas en el nivel 1.... Te faltan ".$xpfaltante."PTS de xp para subir de nivel<br>";
  }
  

?>