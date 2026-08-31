
<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $n1 = $_POST["txtn1"];
    $n2 = $_POST["txtn2"];
    $op = $_POST['cmbop'];

    // Validar que sean números
    if (!is_numeric($n1) || !is_numeric($n2)) {
        echo "<div class='alert alert-danger' role='alert'>
                Error: solo puede ingresar números.
              </div>";
        exit;
    }

    switch ($op) {
        case "suma": 
            echo "<div class='alert alert-success'>La suma de los dos números es: " . ($n1 + $n2) . "</div>";
            break;

        case "resta":
            echo "<div class='alert alert-success'>La resta de los dos números es: " . ($n1 - $n2) . "</div>";
            break;

        case "multiplicacion":
            echo "<div class='alert alert-success'>La multiplicación de los dos números es: " . ($n1 * $n2) . "</div>";
            break;

        case "division":
            if ($n2 == 0) {
                echo "<div class='alert alert-danger' role='alert'>
                        Error: el segundo número no puede ser 0 (CERO).
                      </div>";
                exit;
            } else {
                echo "<div class='alert alert-success'>La división entre los dos números es: " . ($n1 / $n2) . "</div>";
            }
            break;

        case "modulo":
            echo "<div class='alert alert-success'>El módulo entre los dos números es: " . ($n1 % $n2) . "</div>";
            break;

        default:
            echo "<div class='alert alert-warning'>Operación no válida.</div>";
    }
}
?>
