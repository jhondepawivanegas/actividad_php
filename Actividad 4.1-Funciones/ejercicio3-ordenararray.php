<?php

function ordenarArray($array) {
    $length = count($array);
    
    for ($i = 0; $i < $length - 1; $i++) {
        for ($j = 0; $j < $length - $i - 1; $j++) {
            if ($array[$j] > $array[$j + 1]) {
                // Intercambiar elementos si están en el orden incorrecto
                $temp = $array[$j];
                $array[$j] = $array[$j + 1];
                $array[$j + 1] = $temp;
            }
        }
    }
    
    return $array;
}

// Solicitar al usuario el arreglo de números
$input = readline("Ingrese el arreglo de números separados por espacios: ");
$nums = explode(" ", $input);

// Eliminar elementos vacíos del arreglo
$nums = array_filter($nums, 'strlen');

// Convertir los elementos del arreglo a números enteros
$nums = array_map('intval', $nums);

// Ordenar el arreglo
$resultado = ordenarArray($nums);

// Imprimir el resultado
echo "Arreglo ordenado: " . implode(", ", $resultado);
