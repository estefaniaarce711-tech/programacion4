  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
<?php
// Inicialización
$suma = 0;
$contador = 0;
$numeros = [];

// Bucle que suma mientras no supere 1000
for ($i = 1; $suma + $i <= 1000; $i++) {
    $suma += $i;
    $contador++;
    $numeros[] = $i;
}

// Mostrar resultados con Bootstrap
echo "<div class='container mt-5'>";
echo "<h2 class='mb-4'>Resultados de la Simulación</h2>";

echo "<div class='alert alert-info'>Se sumaron los números desde 1 hasta " . ($i - 1) . ".</div>";

echo "<table class='table table-bordered mt-4'>";
echo "<thead><tr><th>Números sumados</th></tr></thead><tbody>";
echo "<tr><td>" . implode(", ", $numeros) . "</td></tr>";
echo "</tbody></table>";

echo "<div class='alert alert-success'>Total acumulado: $suma</div>";
echo "<div class='alert alert-primary'>Cantidad de ciclos efectuados: $contador</div>";
echo "</div>";
?>
