<?php
function tabuada($numero)
{
    echo "<h3>Tabuada do $numero</h3>";
    for ($i = 1; $i <= 10; $i++) {
        $resultado = $numero * $i;
        echo "<tr>";
        echo "<td>$numero x $i</td>";
        echo "<td>=</td>";
        echo "<td>$resultado</td>";
        echo "</tr>";
    }
}

tabuada(2);
?>