<?php

function esPalindromo($cadena) {
    $cadena = strtolower(str_replace(' ', '', $cadena));
    $invertida = strrev($cadena);
    return $cadena === $invertida;
}

// Solicitar entrada al usuario desde la consola

$cadena = readline("ingrese un nombre:");

// Verificar si la cadena es un palíndromo
$resultado = esPalindromo($cadena);

// Mostrar el resultado en la consola
if ($resultado) {
    echo "el nombre '{$cadena}' es un palíndromo.";
} else {
    echo "el nombre'{$cadena}' no es un palíndromo.";
}
