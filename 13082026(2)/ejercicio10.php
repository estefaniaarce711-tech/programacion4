<?php
// Genera un número aleatorio: 0 = cara, 1 = cruz
$moneda = rand(0, 1);

echo "<h1>Resultado del lanzamiento 🪙</h1>";

if ($moneda == 0) {
    echo "<p>Salió: Cara</p>";
    echo "<img src='cara.jpg' alt='Cara de la moneda' width='150'>";
} else {
    echo "<p>Salió: Cruz</p>";
    echo "<img src='cruz.jpg' alt='Cruz de la moneda' width='150'>";
}
?>
