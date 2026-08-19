<?php
function analisarAluno($nota1, $nota2, $nota3) {
    $media = ($nota1 + $nota2 + $nota3) / 3;

    if ($media >= 7) {
        $situacao = "Aprovado";
    } elseif ($media >= 5) {
        $situacao = "Recuperação";
    } else {
        $situacao = "Reprovado";
    }

    $maiorNota = max($nota1, $nota2, $nota3);
    $menorNota = min($nota1, $nota2, $nota3);

    return [
        "media" => $media,
        "situacao" => $situacao,
        "maiorNota" => $maiorNota,
        "menorNota" => $menorNota
    ];
}

$resultado = analisarAluno(8, 6, 9);

echo "Média: " . $resultado["media"] . "<br>";
echo "Situação: " . $resultado["situacao"] . "<br>";
echo "Maior nota: " . $resultado["maiorNota"] . "<br>";
echo "Menor nota: " . $resultado["menorNota"];
?>
