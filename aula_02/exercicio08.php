<?php
//numero escolhido 
$numero = 7;

//cabeçalho
echo "Tabuada do número $numero:</br></br>";

//for para gerar a tabuada
for ($i = 1; $i <= 10; $i++) {
    $resultado = $numero * $i;
    echo "$numero x $i = $resultado</br>";
}
?>