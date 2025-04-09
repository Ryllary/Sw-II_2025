<?php


$alunos = [
    "Lya" => 8.0,
    "Murilo" => 9.5,
    "Ryllary" => 7.0,
    "Taylor" => 10.0,
    "Nakamura" => 6.0
];

//variável para soma
$soma = 0;

//array somando as notas
foreach ($alunos as $aluno => $nota) {
    $soma += $nota;
    echo "Aluno: $aluno - Nota: $nota<br>";
}

//média
$media = $soma / count($alunos);

//resultado
echo "<br>Média da turma: " . number_format($media, 2);

?>
