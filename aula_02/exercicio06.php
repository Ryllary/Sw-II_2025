<?php
//variável de soma
$soma = 0;

//soma números de 1 a 50 (com auxílio de tutorial do youtube)
for ($i = 1; $i <= 50; $i++) {
    $soma += $i;
    echo "Soma até o número $i: $soma </br>";
}

//resultado final
echo "</br>A soma total dos números de 1 a 50 é: $soma";
?>