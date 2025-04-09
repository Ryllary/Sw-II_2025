<?php 


$numeros = [10, 12, 50, 200, 250, 380, 5000, 4];

$menor = $numeros[0];
$maior = $numeros[0];

for ($i = 0; $i < count($numeros); $i++) {
    if ($numeros[$i] < $menor) {
        $menor = $numeros[$i];
    }
    if ($numeros[$i] > $maior) {
        $maior = $numeros[$i];
    }
}

echo "O menor número do array é: " . $menor . "<br>";
echo "O maior número do array é: " . $maior;
?>