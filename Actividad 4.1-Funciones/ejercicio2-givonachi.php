<?php
function generarFibonacci($numero) {
    $secuencia = [];

    // Caso base: agregar los primeros dos números de Fibonacci a la lista
    $secuencia[] = 0;
    $secuencia[] = 1;

    // Generar la secuencia hasta el número dado
    while (end($secuencia) < $numero) {
        $ultimo = end($secuencia);
        $penultimo = prev($secuencia);
        $nuevo = $ultimo + $penultimo;
        $secuencia[] = $nuevo;
    }

    // Mostrar la secuencia en la consola
    echo "Secuencia de Fibonacci hasta el número {$numero}:\n";
    foreach ($secuencia as $numero) {
        echo $numero . " ";
    }
}

// Solicitar entrada al usuario desde la consola

$numero = (int) readline("ingrese un numero:");

// Generar y mostrar la secuencia de Fibonacci
generarFibonacci($numero);
