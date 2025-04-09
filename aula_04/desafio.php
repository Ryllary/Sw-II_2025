<?php


$alunos = [
    "Zawe Ashton" => 10,
    "Melanie Martinez" => 5.0,
    "Taylor" => 7.0,
    "Bjork" => 8.5,
    "Ryll" => 5.5
];

$soma = 0;
$maiorNota = 0;
$alunoMaiorNota = "";


foreach ($alunos as $aluno => $nota) {
    $soma += $nota;
    echo "Aluno: $aluno - Nota: $nota<br>";
    

    if ($nota > $maiorNota) {
        $maiorNota = $nota;
        $alunoMaiorNota = $aluno;
    }
}


$media = $soma / count($alunos);


echo "<br>Média geral da turma: " . number_format($media, 2);
echo "<br>Aluno com a maior nota: $alunoMaiorNota (Nota: $maiorNota)";

?>
