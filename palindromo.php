<?php

//funcion nombe
function esPalindromo($texto) {
    // se convierte los texto a miniscula y se elimina los espacios en blanco
    $texto = strtolower(str_replace(' ', '', $texto));

    // Verificamos 
    return $texto === strrev($texto);
}

// Ejemplo de uso
$cadena = "Anita lava la tina";
// se comprueba
if (esPalindromo($cadena)) {
    echo "'$cadena' es un palíndromo.";
} else {
    echo "'$cadena' no es un palíndromo.";
}
?>
