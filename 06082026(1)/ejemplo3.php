<?php
// 1. Definicion de variables base de la partida
$nombreJugador = "fuka"; // String
$misionesCompletadas = 4; // Int
$xpPorMision = 250; // Int
$multiplicadorPaseBatalla = 1.5; // Float (50% extra de XP)
$tienePaseActivo = true; // Bool

// 2. Calculo matematico de XP base
$xpBase = $misionesCompletadas * $xpPorMision;
// 3. Aplicacion de condicion logica para evaluar la bonificacion
if ($tienePaseActivo == true) {
$xpTotal = $xpBase * $multiplicadorPaseBatalla;
} else {
$xpTotal = $xpBase;
}
// 4. Salida de datos en consola / navegador
echo "Jugador: " . $nombreJugador . "<br>";
echo "XP Base Obtenida: " . $xpBase . " pts<br>";
echo "XP Final con Pase de Batalla: " . $xpTotal . " pts<br>";
?>