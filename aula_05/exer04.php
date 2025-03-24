<?php

$jsonContent = file_get_contents('usuarios.json');
$usuarios = json_decode($jsonContent, true);


$buscarEmail = $_GET['email'] ?? 'ryll@email.com'; 

// Buscar usuário
$usuarioEncontrado = null;
foreach ($usuarios as $usuario) {
    if ($usuario['email'] === $buscarEmail) {
        $usuarioEncontrado = $usuario;
        break;
    }
}


if ($usuarioEncontrado) {
    echo "<h2>Usuário Encontrado:</h2>";
    echo "<p>Nome: {$usuarioEncontrado['nome']}</p>";
    echo "<p>Email: {$usuarioEncontrado['email']}</p>";
    echo "<p>Idade: {$usuarioEncontrado['id']}</p>";
} else {
    echo "<h2>Erro:</h2>";
    echo "<p>Nenhum usuário encontrado com o email: $buscarEmail</p>";
}

?>