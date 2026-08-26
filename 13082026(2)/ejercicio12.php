<?php
// Simular avance aleatorio de cinco caballos
$caballos = [];
for($i=1; $i<=5; $i++){
    $caballos[$i] = rand(1, 100);
}

// Mostrar resultados
echo "<h1>Resultados de la carrera</h1>";
foreach($caballos as $num => $avance){
    echo "<p>Caballo $num avanzó: $avance metros</p>";
}

// Determinar ganador
$ganador = array_keys($caballos, max($caballos));
if(count($ganador) == 1){
    echo "<p><strong>Ganador: Caballo ".$ganador[0]." 🏆</strong></p>";
} else {
    echo "<p><strong>Empate entre caballos: ".implode(", ", $ganador)." 🟰</strong></p>";
}
?>
