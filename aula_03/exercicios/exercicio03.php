<?php
function ParImpar($numero)
{
    if ($numero % 2 == 0) {
        return "O número $numero é par";
    } else {
        return "O número $numero é ímpar";
    }
}


$numero = 7; 
$resultado = ParImpar($numero);
echo $resultado;
?>