<?php

    $peticiones = intval($_POST["peticiones"]);

    // Costo fijo mensual
    $costo_fijo = 20;

    // Costo variable: $0.05 por cada 1000 peticiones
    $costo_variable = ($peticiones / 1000) * 0.05;

    // Costo total
    $costo_total = $costo_fijo + $costo_variable;

    echo "<h3>Resultado:</h3>";
    echo "<p>Para $peticiones peticiones, el costo estimado es: $" . number_format($costo_total, 2) . " USD</p>";

?>
