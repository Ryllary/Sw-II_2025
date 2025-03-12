<?php
function fatorial($numero)
{
    if ($numero < 0) {
        return "Não existe fatorial em números negativo";
    }
    if ($numero <= 1) {
        return 1;
    }
    return $numero * fatorial($numero - 1);
}

//uso
$numero = 5;
echo "O fatorial de $numero é: " . fatorial($numero) . "<br>";

//testei aqui com outros números
echo "Fatorial de 0: " . fatorial(0) . "<br>";
echo "Fatorial de 3: " . fatorial(4) . "<br>";
echo "Fatorial de 7: " . fatorial(2) . "<br>";
echo "Fatorial de -4: " . fatorial(-4);
?>