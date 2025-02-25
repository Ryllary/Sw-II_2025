<?php
// Simula uma opção selecionada pelo usuário
$opcao = 2;

// Exibe o menu de opções
echo "Opções:</br>";
echo "1 - Consultar Saldo</br>";
echo "2 - Fazer Depósito</br>";
echo "3 - Fazer Saque</br>";
echo "4 - Sair</br>";
echo "</br>Opção selecionada: " . $opcao . "</br>";

// Estrutura switch-case de banco
switch ($opcao) {
    case 1:
        echo "Você selecionou: Consultar Saldo";
        break;

    case 2:
        echo "Você selecionou: Fazer Depósito";
        break;

    case 3:
        echo "Você selecionou: Fazer Saque";
        break;

    case 4:
        echo "Saindo do sistema...";
        break;

    default:
        echo "Opção inválida!";
}
?>