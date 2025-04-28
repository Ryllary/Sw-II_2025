<?php
    //cabeçalho
    header("Content-Type: application/json"); //define o tipo da resposta

    $metodo = $_SERVER['REQUEST_METHOD'];

    //recupera o arquivo json na mesma pasta
    $arquivo = 'usuarios.json';

    // verifica se o arquivo existe, se nao cria um array vazio
    if(!file_exists($arquivo)){
        file_put_contents($arquivos, json_encode([], JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE));
    }
    