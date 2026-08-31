<?php
// Capturar valores del formulario
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$cedula = $_POST['cedula'];
$celular = $_POST['celular'];
$email = $_POST['email'];
$fecha_nacimiento = $_POST['fecha_nacimiento'];

// Validar que la cédula sea numérica
if (!ctype_digit($cedula)) {
    die("Error: La cédula debe contener solo números.");
}

// Validar formato de email
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    die("Error: El correo electrónico no tiene un formato válido.");
}

// Mostrar resultados si todo es correcto
echo "<div style='font-family:Arial; max-width:500px; margin:20px auto; background:#fff; padding:20px; border-radius:8px; box-shadow:0 4px 10px rgba(0,0,0,0.1);'>";
echo "<h2>Registro exitoso</h2>";
echo "<p><strong>Nombre:</strong> $nombre</p>";
echo "<p><strong>Apellido:</strong> $apellido</p>";
echo "<p><strong>Cédula:</strong> $cedula</p>";
echo "<p><strong>Celular:</strong> $celular</p>";
echo "<p><strong>Email:</strong> $email</p>";
echo "<p><strong>Fecha de nacimiento:</strong> $fecha_nacimiento</p>";
echo "</div>";
?>
