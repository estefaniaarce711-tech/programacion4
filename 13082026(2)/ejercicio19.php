<?php
$lado = (int)$_POST['lado'];
$operacion = $_POST['operacion'];

echo "<div class='resultado'>";
echo "<h1>Resultado</h1>";

if($operacion == "superficie"){
    $superficie =pow($lado, 2)
    echo "<p>La superficie del cuadrado es: <strong>$superficie</strong></p>";
} elseif($operacion == "perimetro"){
    $perimetro = 4 * $lado;
    echo "<p>El perímetro del cuadrado es: <strong>$perimetro</strong></p>";
} else {
    echo "<p>Operación no válida</p>";
}

echo "</div>";
?>
