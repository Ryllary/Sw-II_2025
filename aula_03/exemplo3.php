<?php
//função sem parametro e com retorno

function msg (){
    $a = "Zawe";
    return $a;
}

//o .= concatena (JUNTA OS ELEMENTOS)
$frase = "Oiee";
$frase .= msg();
$frase .= " bem-vindo";

echo $frase;
?>