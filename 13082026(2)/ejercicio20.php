<?php
$lado = (int)$_POST['lado'];
$operaciones = $_POST['operacion']; // array de operaciones seleccionadas

echo "<div class='resultado'>";
echo "<h1>Resultados</h1>";

foreach($operaciones as $op){
    if($op == "superficie"){
        $superficie = pow($lado, 2); // lado al cuadrado
        echo "<p>Superficie: <strong>$superficie</strong></p>";
    }
    if($op == "perimetro"){
        $perimetro = 4 * $lado;
        echo "<p>Perímetro: <strong>$perimetro</strong></p>";
    }
}

echo "</div>";
?>
