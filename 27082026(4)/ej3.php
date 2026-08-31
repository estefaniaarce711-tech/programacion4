<link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB"
            crossorigin="anonymous"
        />



<?php

/**
 * suma dos numero con valiudacion y muestra el resultaado con emojis
 * 
 * @param mixed $numero1 es el primer numero a sumar
 *@paaram mixed $numero2 el segundo numero a sumar
 */
 function sumar($numero1, $numero2) : void
{
    //validar que ambos parametros sea numeros
    if(!is_numeric($numero1) || !is_numeric($numero2)){
        echo"<div class='alert alert-danger text-center' role='alert'>
        Error: Ambos parametros deben ser numeros.
        </div>";

        return;//detiene la ejecucion de la funcion
    }
    $resultado=$numero1 +$numero2;
    $emojis=['😊','🚀','🌟','🎉','💡'];
    $emoji_aleatorio=$emojis[array_rand($emojis)];

    echo "<div class='alert alert-info text-center mt-4' role='alert'>
    La suma de **{$numero1}** y **{$numero2}** es:
    <br>
    <strong class='h3'>{$resultado}</strong>{$emoji_aleatorio}
    </div>";
}
sumar(24,2);
?>