<?php

$jsonString = file_get_contents('produtos.json');


$data = json_decode($jsonString, true);


$novoProduto = [
    "id" => count($data) + 1,
    "nome" => "Novo Produto",
    "preco" => 99.99,
    "quantidade" => 10
];


$data[] = $novoProduto;


$jsonAtualizado = json_encode($data, JSON_PRETTY_PRINT);


file_put_contents('produtos.json', $jsonAtualizado);

echo "Novo produto adicionado com sucesso!";
?>