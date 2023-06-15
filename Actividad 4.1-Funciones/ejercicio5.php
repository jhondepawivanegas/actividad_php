<?php

function FierroAlv() {
    for ($i = 1; $i <= 100; $i++) {
        if ($i % 3 == 0 && $i % 5 == 0) {
            echo "PesoPluma\n";
        } elseif ($i % 3 == 0) {
            echo "Peso\n";
        } elseif ($i % 5 == 0) {
            echo "Pluma\n";
        } else {
            echo $i . "\n";
        }
    }
}

FierroAlv();
