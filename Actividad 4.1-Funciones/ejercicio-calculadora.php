<?php
// funcion para hacer una calculadoras
//que tipo de dato voy a recibir, int numero 1 int  numero 2
//int retorneme un entero 4x3 , o retorneme un flotante en ves de int en la division se pone float
function suma(int $numero1, int $numero2):int{
    $resultado = $numero1 + $numero2;
    return $resultado;

}
function resta(int $numero1, int $numero2):int{
    $resultado = $numero1 - $numero2;
    return $resultado;

}
function multiplicacion(int $numero1, int $numero2):int{
    $resultado = $numero1 * $numero2;
    return $resultado;

}
function division(int $numero1, int $numero2):float{
    $resultado = $numero1 / $numero2;
    return $resultado;

}
$condicion = readline("oprima 1 para sumar u oprima 2 para restar, oprima 3 para multiplicar, oprima 4 para dividir :");

if ( $condicion == "1"){
    $var1 = intval(readline("ingrese el numero 1\n"));
    $var2 = intval(readline("ingrese el numero 2\n"));
echo " el resultado de la suma entre $var1 y $var2 es :".suma($var1,$var2);

}elseif( $condicion == "2"){
    $var1 = intval(readline("ingrese el numero 1\n"));
    $var2 = intval(readline("ingrese el numero 2\n"));
    echo " el resultado de la resta entre $var1 y $var2 es: ".resta($var1,$var2);

}elseif( $condicion == "3"){
    $var1 = intval(readline("ingrese el numero 1\n"));
    $var2 = intval(readline("ingrese el numero 2\n"));
    echo " el resultado de la resta entre $var1 y $var2 es: ".multiplicacion($var1,$var2);
}elseif( $condicion == "4"){ 
    $var1 = intval(readline("ingrese el numero 1\n"));
    $var2 = intval(readline("ingrese el numero 2\n"));
    echo " el resultado de la resta entre $var1 y $var2 es: ".division($var1,$var2);
}




