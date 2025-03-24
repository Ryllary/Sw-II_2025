<?php
$arquivoJson = 'produtos.json';
$conteudoJson = file_get_contents($arquivoJson);
$produtos = json_decode($conteudoJson, true);


$produtoParaRemover = "Nome do Produto"; 

$produtosAtualizados = array_filter($produtos, function($produto) use ($produtoParaRemover) {
    return $produto['nome'] !== $produtoParaRemover;
});


$novoConteudoJson = json_encode($produtosAtualizados, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);


file_put_contents($arquivoJson, $novoConteudoJson);

echo "Produto removido com sucesso!";
?>