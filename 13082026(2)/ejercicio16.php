<?php
// Capturar valores del formulario
$num1 = (int)$_POST['lbln1'];
$num2 = (int)$_POST['lbln2'];
$operadores = $_POST['chkoperacion']; // array de operaciones seleccionadas

echo "<h1>Resultados de las operaciones</h1>";

foreach($operadores as $op){
    switch($op){
        case "suma":
            echo "<p>Suma: $num1 + $num2 = <strong>".($num1 + $num2)."</strong></p>";
            break;
        case "resta":
            echo "<p>Resta: $num1 - $num2 = <strong>".($num1 - $num2)."</strong></p>";
            break;
        case "multiplicacion":
            echo "<p>Multiplicación: $num1 × $num2 = <strong>".($num1 * $num2)."</strong></p>";
            break;
        case "division":
            if($num2 != 0){
                echo "<p>División: $num1 ÷ $num2 = <strong>".($num1 / $num2)."</strong></p>";
            } else {
                echo "<p>División: Error, no se puede dividir por cero</p>";
            }
            break;
        case "resto":
            if($num2 != 0){
                echo "<p>Resto: $num1 % $num2 = <strong>".($num1 % $num2)."</strong></p>";
            } else {
                echo "<p>Resto: Error, no se puede dividir por cero</p>";
            }
            break;
    }
}
?>
