<?php
// === CAPA LÓGICA (PHP PURO) ===
$titulo = 'Gestión de Datos Personales';
$subtitulo = 'Procesamiento seguro con $_POST y persistencia';
$procesado = false;
$errores = [];
$nombre = '';
$apellido = '';
$estadoCivil = 'Soltero';
$ciudad = 'Caacupé';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
// 1. Captura y sanitización inicial
$nombre = isset($_POST['nombre']) ? trim($_POST['nombre']) : '';
$apellido = isset($_POST['apellido']) ? trim($_POST['apellido']) : '';
$estadoCivil = isset($_POST['estado_civil']) ? $_POST['estado_civil'] : '';
$ciudad = isset($_POST['ciudad']) ? $_POST['ciudad'] : '';
$password = isset($_POST['password']) ? trim($_POST['password']) : '';
// 2. Validaciones de presencia de datos
if (empty($nombre)) {
$errores[] = 'El campo nombre es obligatorio.';
}
if (empty($apellido)) {
$errores[] = 'El campo apellido es obligatorio.';
}
if (empty($estadoCivil)) {
$errores[] = 'Debe seleccionar un estado civil.';
}
// 3. Verificación de credencial
if (empty($password)) {
$errores[] = 'La contraseña no puede estar vacía.';
} elseif ($password !== 'Ab@12345') {
$errores[] = 'La contraseña no es correcta.';
}
$procesado = true;
}
// 4. Inclusión de la vista
require __DIR__ . '/vistas/ej01_personal_view.php';
