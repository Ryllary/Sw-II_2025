<?php
// cabeçalho
header("Content-Type: application/json"); // define o tipo da resposta

$metodo = $_SERVER['REQUEST_METHOD'];

// recupera o arquivo json na mesma pasta
$arquivo = 'usuario.json';

// verifica se o arquivo existe, se não, cria um array vazio
if (!file_exists($arquivo)) {
    file_put_contents($arquivo, json_encode([], JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE));
}

// CORREÇÃO: carrega os dados do JSON para a variável $usuario
$usuario = json_decode(file_get_contents($arquivo), true);

switch ($metodo) {

    case 'GET':
        // verifica se tem um parâmetro id
        if (isset($_GET['id'])) {
            $id = intval($_GET['id']);
            $usuario_encontrado = null;

            // procura pelo id
            foreach ($usuario as $u) {
                if ($u['id'] == $id) {
                    $usuario_encontrado = $u;
                    break;
                }
            }

            if ($usuario_encontrado) {
                echo json_encode($usuario_encontrado, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);
            } else {
                http_response_code(404);
                echo json_encode(["erro" => "Usuário não encontrado"], JSON_UNESCAPED_UNICODE);
            }
        } else {
            // retorna todos os usuários
            echo json_encode($usuario, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);
        }
        break;

    case 'POST':
        $dados = json_decode(file_get_contents('php://input'), true);

        if (!isset($dados["nome"]) || !isset($dados["email"])) {
            http_response_code(400);
            echo json_encode(["erro" => "Nome e email são obrigatórios"], JSON_UNESCAPED_UNICODE);
            exit;
        }

        // gera um id único
        $novo_id = 1;

        if (!empty($usuario)) {
            $ids = array_column($usuario, 'id');
            $novo_id = max($ids) + 1;
        }

        $novoUsuario = [
            "id" => $novo_id,
            "nome" => $dados["nome"],
            "email" => $dados["email"]
        ];

        // adiciona o novo usuário ao array existente
        $usuario[] = $novoUsuario;

        // salva no arquivo
        file_put_contents($arquivo, json_encode($usuario, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE));

        // retorna a confirmação
        echo json_encode([
            "mensagem" => "Usuário inserido com sucesso",
            "usuario" => $novoUsuario
        ], JSON_UNESCAPED_UNICODE);

        break;

    default:
        http_response_code(405); // método não permitido
        echo json_encode(["erro" => "Método não permitido"], JSON_UNESCAPED_UNICODE);
        break;
}
?>
