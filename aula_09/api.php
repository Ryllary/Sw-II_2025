<?php
// cabeçalho
header("Content-Type: application/json");

// define o tipo da resposta
$metodo = $_SERVER['REQUEST_METHOD'];

// recupera o arquivo json na mesma pasta
$arquivo = 'usuario.json';

// verifica se o arquivo existe, se não, cria um array vazio
if (!file_exists($arquivo)) {
    file_put_contents($arquivo, json_encode([], JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE));
}

// carrega os dados do JSON para a variável
$usuario = json_decode(file_get_contents($arquivo), true);

switch ($metodo) {
    case 'GET':
        if (isset($_GET['id'])) {
            $id = intval($_GET['id']);
            $usuario_encontrado = null;

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

        $usuario[] = $novoUsuario;

        file_put_contents($arquivo, json_encode($usuario, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE));

        echo json_encode([
            "mensagem" => "Usuário inserido com sucesso",
            "usuario" => $novoUsuario
        ], JSON_UNESCAPED_UNICODE);
        break;

    case 'PUT':
        parse_str(file_get_contents("php://input"), $put_vars);

        if (!isset($put_vars['id'])) {
            http_response_code(400);
            echo json_encode(["erro" => "ID do usuário é obrigatório para atualização"], JSON_UNESCAPED_UNICODE);
            exit;
        }

        $id = intval($put_vars['id']);
        $atualizado = false;

        foreach ($usuario as &$u) {
            if ($u['id'] == $id) {
                if (isset($put_vars['nome'])) $u['nome'] = $put_vars['nome'];
                if (isset($put_vars['email'])) $u['email'] = $put_vars['email'];
                $atualizado = true;
                break;
            }
        }

        if ($atualizado) {
            file_put_contents($arquivo, json_encode($usuario, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE));
            echo json_encode(["mensagem" => "Usuário atualizado com sucesso"], JSON_UNESCAPED_UNICODE);
        } else {
            http_response_code(404);
            echo json_encode(["erro" => "Usuário não encontrado"], JSON_UNESCAPED_UNICODE);
        }
        break;

    case 'DELETE':
        parse_str(file_get_contents("php://input"), $delete_vars);

        if (!isset($delete_vars['id'])) {
            http_response_code(400);
            echo json_encode(["erro" => "ID do usuário é obrigatório para exclusão"], JSON_UNESCAPED_UNICODE);
            exit;
        }

        $id = intval($delete_vars['id']);
        $encontrado = false;

        foreach ($usuario as $key => $u) {
            if ($u['id'] == $id) {
                unset($usuario[$key]);
                $usuario = array_values($usuario); // reorganiza os índices
                $encontrado = true;
                break;
            }
        }

        if ($encontrado) {
            file_put_contents($arquivo, json_encode($usuario, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE));
            echo json_encode(["mensagem" => "Usuário deletado com sucesso"], JSON_UNESCAPED_UNICODE);
        } else {
            http_response_code(404);
            echo json_encode(["erro" => "Usuário não encontrado"], JSON_UNESCAPED_UNICODE);
        }
        break;

    default:
        http_response_code(405);
        echo json_encode(["erro" => "Método não permitido"], JSON_UNESCAPED_UNICODE);
        break;
}
?>
