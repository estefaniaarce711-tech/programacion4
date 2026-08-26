<?php
// Simular avance aleatorio de dos caballos
$caballo1 = rand(1, 100);
$caballo2 = rand(1, 100);

echo "<h1>Resultados de la carrera</h1>";
echo "<p>Caballo 1 avanzó: $caballo1 metros</p>";
echo "<p>Caballo 2 avanzó: $caballo2 metros</p>";

if($caballo1 > $caballo2){
    echo "<p><strong>Ganador: Caballo 1 🏆</strong></p>";
} elseif($caballo2 > $caballo1){
    echo "<p><strong>Ganador: Caballo 2 🏆</strong></p>";
} else {
    echo "<p><strong>Empate 🟰</strong></p>";
}
?>
