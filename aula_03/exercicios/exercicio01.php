<?php
//função sem parametro e com retorno

function msg()
{
    $a = "Ryllary";
    return $a;
}

//o .= concatena (JUNTA OS ELEMENTOS)
$frase = "Olá, ";
$frase .= msg();
$frase .= "! Bem-vindo.";

echo $frase;
?>