 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $lado = $_POST["lado"];

    // Validar que sea número válido
    if (!is_numeric($lado) || $lado <= 0) {
        echo "<div class='alert alert-danger' role='alert'>
                Error: ingrese un número válido mayor a 0.
              </div>";
        exit;
    }

    // Verificar si se seleccionaron operaciones
    if (!isset($_POST["operacion"])) {
        echo "<div class='alert alert-warning' role='alert'>
                Debe seleccionar al menos una opción.
              </div>";
        exit;
    }

    $operaciones = $_POST["operacion"];

    echo "<table class='table table-bordered mt-4'>";
    echo "<thead><tr><th>Operación</th><th>Resultado</th></tr></thead><tbody>";

    foreach ($operaciones as $op) {
        if ($op == "perimetro") {
            $resultado = 4 * $lado;
            echo "<tr><td>Perímetro</td><td>$resultado</td></tr>";
        }
        if ($op == "superficie") {
            $resultado = $lado * $lado;
            echo "<tr><td>Superficie</td><td>$resultado</td></tr>";
        }
    }

    echo "</tbody></table>";
}
?>
