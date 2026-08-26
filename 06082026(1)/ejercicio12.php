<?php
// bandwidth.php


    $smartphones = $_POST["smartphones"];
    $tvs = $_POST["tvs"];
    $internet = $_POST["internet"];

    // Consumo total de dispositivos
    $consumoSmartphones = $smartphones * 5;
    $consumoTVs = $tvs * 10;
    $consumoTotal = $consumoSmartphones + $consumoTVs;

    // Streaming 4K requiere 25 Mbps adicionales
    $consumoNecesario = $consumoTotal + 25;

    if ($internet >= $consumoNecesario) {
        echo "La red soporta streaming 4K. Consumo total: $consumoNecesario Mbps, Internet disponible: $internet Mbps.";
    } else {
        echo "La red NO soporta streaming 4K. Consumo total: $consumoNecesario Mbps, Internet disponible: $internet Mbps.";
    }

?>
