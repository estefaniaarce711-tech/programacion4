<?php
// Capturar valores del formulario
$num1 = $_POST['num1'];
$num2 = $_POST['num2'];
$operadores = $_POST['operador']; // array de operaciones seleccionadas

echo "<h1>Resultados de las operaciones</h1>";

foreach($operadores as $op){
    switch($op){
        case "suma":
            $resultado = $num1 + $num2;
            echo "<p>Suma: $num1 + $num2 = <strong>$resultado</strong></p>";
            break;
        case "resta":
            $resultado = $num1 - $num2;
            echo "<p>Resta: $num1 - $num2 = <strong>$resultado</strong></p>";
            break;
        case "multiplicacion":
            $resultado = $num1 * $num2;
            echo "<p>Multiplicación: $num1 × $num2 = <strong>$resultado</strong></p>";
            break;
        case "division":
            if($num2 != 0){
                $resultado = $num1 / $num2;
                echo "<p>División: $num1 ÷ $num2 = <strong>$resultado</strong></p>";
            } else {
                echo "<p>División: Error, no se puede dividir por cero</p>";
            }
            break;
        case "resto":
            if($num2 != 0){
                $resultado = $num1 % $num2;
                echo "<p>Resto: $num1 % $num2 = <strong>$resultado</strong></p>";
            } else {
                echo "<p>Resto: Error, no se puede dividir por cero</p>";
            }
            break;
    }
}
?>
