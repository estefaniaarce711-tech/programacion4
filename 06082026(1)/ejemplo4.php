<?php
// 1. Variables de entrada del canal
$suscriptoresNivel1 = 120; // Paga $4.99 c/u
$suscriptoresNivel2 = 35; // Paga $9.99 c/u
$precioN1 = 4.99;
$precioN2 = 9.99;
$comisionPlataforma = 0.30; // La plataforma retiene el 30%

// 2. Calculo de ingresos brutos
$ingresoBruto = ($suscriptoresNivel1 * $precioN1) + ($suscriptoresNivel2 * $precioN2);

// 3. Calculo de la retencion de la plataforma
$montoComision = $ingresoBruto * $comisionPlataforma;

// 4. Ingreso neto liquido del streamer
$ingresoNeto = $ingresoBruto - $montoComision;

// 5. Formateo y salida
echo "=== RESUMEN FINANCIERO MENSUAL DEL CANAL ===<br>";
echo "Ingreso Bruto Generado: $" . number_format($ingresoBruto, 2) . "<br>";
echo "Comision de Plataforma (30%): $" . number_format($montoComision, 2) . "<br>";
echo "Ingreso Neto Estimado a Cobrar: $" . number_format($ingresoNeto, 2) . "<br>";
?>