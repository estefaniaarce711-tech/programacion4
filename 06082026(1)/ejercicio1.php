
<?php
//CALCULADORA DE DESCUENTOS EN SUSCRIPCIONES
//Un servicio de musica ofrece un plan de $10/mes. Si el estudiante tiene un codigo
//promocional activo($codigovalido=true) se le aplica un descuento del 20%. Calcular el preciofinal
//entrada
$preciobase=10;
$codigovalido=true;
$descuento=0.20;
//operacion
if($codigovalido==true){
    $preciofinal=$preciobase-($preciobase*$descuento);
    $mensaje='el total a pagar es: '.$preciofinal;
}else{
      $mensaje='el total a pagar es: '.$preciobase;
}
echo $mensaje;



?>