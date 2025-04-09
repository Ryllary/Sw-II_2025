<?php 

$pessoa = array(
    'nome' => 'Ryllary',
    'idade' => 17,
    'cidade' => 'Ribeirão Pires'
);


$pessoa['profissao'] = 'Desenvolvedor(a) Front-End';


$amigos = array('Igor', 'Murilo', 'Nakamura');

// Combining arrays
$dados = array_merge($pessoa, array('amigos' => $amigos));


print_r($dados);

?>