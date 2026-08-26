<?php
$suma = 0;
$contador = 0;
$numeros = [];

for($i = 1; $suma + $i <= 1000; $i++){
    $suma += $i;
    $contador++;
    $numeros[] = $i;
}

echo "<div class='contenedor'>";
echo "<h1>Resultados del cálculo</h1>";
echo "<p><strong>Números sumados:</strong></p>";
echo "<p>".implode(", ", $numeros)."</p>";
echo "<p><strong>Total de números sumados:</strong> $contador</p>";
echo "<p><strong>Suma final:</strong> $suma</p>";
echo "</div>";
?>

