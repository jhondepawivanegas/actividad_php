<?php

$palo = array('Corazones', 'Diamantes', 'Treboles', 'Picas');
$valor = array('2', '3', '4', '5', '6', '7', '8', '9', '10', 'J', 'Q', 'K', 'A');

// Generar el mazo de cartas
$mazo = array();
foreach ($palo as $p) {
    foreach ($valor as $v) {
        $mazo[] = array('palo' => $p, 'valor' => $v);
    }
}

// Función para repartir las cartas
function repartirCartas(&$mazo) {
    $mano = array();
    for ($i = 0; $i < 5; $i++) {
        $index = array_rand($mazo);
        $mano[] = $mazo[$index];
        unset($mazo[$index]);
    }
    return $mano;
}

// Función para mostrar las cartas
function mostrarCartas($mano) {
    foreach ($mano as $carta) {
        echo $carta['valor'].' de '.$carta['palo'].PHP_EOL;
    }
}

// Función para evaluar la mano
function evaluarMano($mano) {
    $valores = array();
    $palos = array();
    foreach ($mano as $carta) {
        $valores[] = $carta['valor'];
        $palos[] = $carta['palo'];
    }
    $valores_unicos = array_count_values($valores);
    $palos_unicos = array_count_values($palos);

    // Comprobar si hay poker, full, trio o dos pares
    if (max($valores_unicos) == 4) {
        return "Poker!";
    } elseif (max($valores_unicos) == 3) {
        if (in_array(2, $valores_unicos)) {
            return "Full!";
        } else {
            return "Trio!";
        }
    } elseif (max($valores_unicos) == 2) {
        if (count(array_keys($valores_unicos, 2)) == 2) {
            return "Dos Pares!";
        } else {
            return "Un Par!";
        }
    }

    // Para el caso de que no haya ninguna de las combinaciones anteriores,
    // comprobar si todas las cartas son del mismo palo (color)
    if (count($palos_unicos) == 1) {
        return "Color!";
    }

    // En cualquier otro caso, es carta alta
    return "Carta Alta!";
}

// Programa principal
$mano = repartirCartas($mazo);
mostrarCartas($mano);
echo evaluarMano($mano);
