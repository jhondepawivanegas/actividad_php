
<?php
$array = [];
function calcularSumaDigitos(int $numero) {
    $suma = 0;
    $array= str_split($numero);
    
    for ($i =0; $i < count($array);$i++) {
        $suma += $array[$i];
    }
    echo "la suma de los digitos es $suma";
}

// Solicitar al usuario que ingrese un número

$sumar= (int)readline("ingrese un numero");

// Calcular la suma de los dígitos
calcularSumaDigitos($sumar);
echo "\n\n";
?>
