<?php

$numeros = [5, 10, 15, 20, 25, 30, 35, 40, 45, 50];


$soma = 0;


for ($i = 0; $i < count($numeros); $i++) {
    $soma += $numeros[$i];
}


echo "A soma dos elementos do array é: " . $soma;
?>
