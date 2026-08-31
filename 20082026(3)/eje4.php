
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $lado = $_POST["lado"];
    $operacion = $_POST["operacion"];

    // Validación
    if (!is_numeric($lado) || $lado <= 0) {
        echo "<div class='alert alert-danger' role='alert'>
                Error: solo puede ingresar números mayores a 0.
              </div>";
    } else {
        if ($operacion == "perimetro") {
            $resultado = 4 * $lado;
            echo "<div class='alert alert-success' role='alert'>
                    El perímetro del cuadrado es: $resultado
                  </div>";
        } elseif ($operacion == "superficie") {
            $resultado = $lado * $lado;
            echo "<div class='alert alert-success' role='alert'>
                    La superficie del cuadrado es: $resultado
                  </div>";
        } else {
            echo "<div class='alert alert-warning' role='alert'>
                    Debe seleccionar una operación.
                  </div>";
        }
    }
}
?>
