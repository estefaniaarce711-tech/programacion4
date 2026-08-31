<?php
   //Establecer la zona horaria de asuncion,paraguay
   //esto es importante para obtner la hora local correcta.
   date_default_timezone_set('America/Asuncion');
   /**
    * saluda al usuario segun la hora del dia
    * @param String $nombre el ombre del usuario
    */

   function saludar(string $nombre) : void
   {
    $hora_actual=(int) date('H');
    $saludo='';
    if($hora_actual >=5 && $hora_actual<12){
        $saludo='Buenos dias';
    }elseif($hora_actual>=12 && $hora_actual<19){
        $saludo='Buenas tardes';
    }else{
        $saludo='Buenas noches';
    }
    echo "<h2 class='text-center mt-5'>{$saludo},{$nombre}!</h2>";
    echo "<p class='text-center'>Es hora de programar.🖥️</p>";
   }
   saludar("Stefania Arce");
?>