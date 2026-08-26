<?php

    $dias = intval($_POST["dias"]);
    $recompensa = "";

    if ($dias < 7) {
        $recompensa = "Has ganado ". ($dias * 10)." puntos por tu racha de ". $dias ." días.";
    } elseif ($dias == 7) {
        $recompensa = "¡Felicidades! Has alcanzado el premio mayor por 7 días consecutivos.";
    }

    echo "<h3>Resultado:</h3>";
    echo "<p>$recompensa</p>";

?>
