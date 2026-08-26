<?php
// Capturar valores del formulario
$num1 = $_POST['num1'];
$num2 = $_POST['num2'];
$operador = $_POST['operador'];

$resultado = "";

switch($operador){
    case "suma":
        $resultado = $num1 + $num2;
        break;
    case "resta":
        $resultado = $num1 - $num2;
        break;
    case "multiplicacion":
        $resultado = $num1 * $num2;
        break;
    case "division":
        if($num2 != 0){
            $resultado = $num1 / $num2;
        } else {
            $resultado = "Error: división por cero";
        }
        break;
    case "resto":
        if($num2 != 0){
            $resultado = $num1 % $num2;
        } else {
            $resultado = "Error: división por cero";
        }
        break;
    default:
        $resultado = "Operador no válido";
}

echo "<h1>Resultado de la operación</h1>";
echo "<p>El resultado es: <strong>$resultado</strong></p>";
?>
