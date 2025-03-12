<?php
function soma($array)
{
    $soma = 0;
    foreach ($array as $numero) {
        $soma += $numero;
    }
    return $soma;
}


$numeros = [1, 2, 3, 4, 5];
$resultado = soma($numeros);
echo "A soma dos elementos do array é: " . $resultado;

// testei com outro array
$outroArray = [12, 13, 87, 07];
echo "<br>Outro teste: " . soma($outroArray);
?>