<?php
$contadorSeis = 0; // cuenta los seis consecutivos

while ($contadorSeis < 3) {
    $dado = rand(1, 6); // lanzar dado
    echo "Salió: $dado <br>";

    if ($dado == 6) {
        $contadorSeis++; // suma si salió seis
    } else {
        $contadorSeis = 0; // reinicia si no es seis
    }
}

echo "<strong>¡Salieron tres seis consecutivos!</strong>";
?>
