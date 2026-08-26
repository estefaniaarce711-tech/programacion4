<?php
$contcaras = 0; // contador de caras consecutivas

while ($contcaras < 5) {
    $moneda = rand(0, 1); // lanzar moneda

    if ($moneda == 0) {
        echo "Salió: cara <br>";
        $contcaras++; // suma si salió cara
    } else {
        echo "Salió: cruz <br>";
        $contcaras = 0; // reinicia si no es cara
    }
}

echo "<strong>¡Salieron cinco caras consecutivas!</strong>";
?>
