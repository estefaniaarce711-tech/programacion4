<?php
// matchmaking
    $mmr1 = $_POST["mmr1"];
    $mmr2 = $_POST["mmr2"];

    $diferencia = abs($mmr1 - $mmr2);

    if ($diferencia <= 200) {
        echo " Emparejamiento Aceptado: Diferencia de $diferencia pts dentro del límite.";
    } else {
        echo " Emparejamiento Rechazado: Diferencia de $diferencia pts supera el límite de 200.";
    }

?>
