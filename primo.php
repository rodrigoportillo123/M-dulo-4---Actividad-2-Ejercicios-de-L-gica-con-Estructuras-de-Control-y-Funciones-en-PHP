<?php

//nombre de funcion
function esPrimo($numero) {
    // Si el número es menor que 2, no es primo
    if ($numero < 2) {
        return false;
    }

    // Verificar divisores desde 2 hasta el número - 1
    for ($i = 2; $i < $numero; $i++) {
        if ($numero % $i == 0) {

            // Si encontramos un divisor el número no es primo
            return false; 
        }
    }

    return true; 
}

// definimos el numero
$numero = 30;
//comprobamos
if (esPrimo($numero)) {
    echo "$numero es un número primo.";
} else {
    echo "$numero no es un número primo.";
}
?>
