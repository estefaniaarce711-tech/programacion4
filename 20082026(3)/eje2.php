<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fahrenheit = $_POST["fahrenheit"];

    // Validar que sea número
    if (!is_numeric($fahrenheit)) {
         echo"<div class='alert alert-danger text-center' role='alert'>
        Error: Debe ingresar un número válido..
        </div>";
        exit;
    }

    // Validar rango físico razonable
    if ($fahrenheit < -50 || $fahrenheit > 150) {
     echo"<div class='alert alert-danger text-center' role='alert'>
        Error: La temperatura debe estar entre -50 °F y 150 °F.
        </div>";
      
        exit;
    }

    // Conversión a Celsius
    $celsius = (5.0 / 9.0) * ($fahrenheit - 32.0);

    echo "$fahrenheit °F equivalen a " . round($celsius, 2) . " °C";
}
?>
