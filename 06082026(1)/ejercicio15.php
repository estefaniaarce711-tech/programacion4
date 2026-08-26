<?php

    $usuario = trim($_POST["usuario"]);
    $password = trim($_POST["password"]);
    $mensaje = "";

    if (strlen($password) < 8) {
        $mensaje = "La contrasena debe tener al menos 8 caracteres.";
    } elseif ($password === $usuario) {
        $mensaje = "La contrasena no puede ser igual al nombre de usuario.";
    } else {
        $mensaje = "Contrasena valida. ¡Bien hecho!";
    }

    echo "<h3>Resultado:</h3>";
    echo "<p>$mensaje</p>";

?>
