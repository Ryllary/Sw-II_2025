<?php
    $dados = [
        [
            'nome' => 'Notebook',
            'preco' => 2500.00,
            'quantidade' => 5
        ],
        [
            'nome' => 'Smartphone',
            'preco' => 1500.00,
            'quantidade' => 8
        ],
        [
            'nome' => 'Tablet',
            'preco' => 800.00,
            'quantidade' => 12
        ]
    ];

    // Convert array to JSON
    $json = json_encode($dados, JSON_PRETTY_PRINT);

    // Save JSON to file
    file_put_contents('produtos.json', $json);


?>