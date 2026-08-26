<?php
// Capturar valores del formulario
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$cedula = $_POST['cedula'];
$celular = $_POST['celular'];
$email = $_POST['email'];
$fecha_nacimiento = $_POST['fecha_nacimiento'];

// Mostrar resultados con estilo
echo "<div class='resultados'>";
echo "<h1>Datos ingresados</h1>";
echo "<p><strong>Nombre:</strong> $nombre</p>";
echo "<p><strong>Apellido:</strong> $apellido</p>";
echo "<p><strong>Cédula:</strong> $cedula</p>";
echo "<p><strong>Celular:</strong> $celular</p>";
echo "<p><strong>Email:</strong> $email</p>";
echo "<p><strong>Fecha de nacimiento:</strong> $fecha_nacimiento</p>";
echo "</div>";
?>
