<?php 


$numeros = [39, 1, 14, 87, 60, 8, 20, 56, 9, 13, 15, 11, 23, 44];


$impares = 0;
$pares = 0;

for ($i = 0; $i < count($numeros); $i++) {
    if ($numeros[$i] % 2 == 0) {
        $pares++;
    } else {
        $impares++;
    }
}

echo "O array possui: " . $pares . " números pares e: " . $impares . " números ímpares.";

?>