<?php
function soma($array)
{
    $soma = 0;
    foreach ($array as $numero) {
        $soma += $numero;
    }
    return $soma;
}

// soma do array
$numeros = [10, 20, 30, 40, 50];
$resultado = soma($numeros);
echo "A soma dos elementos array é: " . $resultado;
?>