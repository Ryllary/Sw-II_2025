<?php
//função com parametro e com retorno

function msg ($x){
    $a = "Zawe" . $x;
    return $a;
}

$sobrenome = "Ashton";

//o .= concatena (JUNTA OS ELEMENTOS)
$frase = "Oiee";
$frase .= msg($sobrenome);
$frase .= " bem-vindo";

echo $frase;
?>