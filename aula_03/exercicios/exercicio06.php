<?php
function tabuada($numero)
{
    echo "$numero";
    for ($i = 1; $i <= 10; $i++) {
        $resultado = $numero * $i;
        echo "$numero x $i";
        echo tabuada($resultado);
    }
}

tabuada(8);
?>