<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade 4</title>
</head>
<body>
    <h1>Resultado do Aluno</h1>
    <p><b>Nome: </b> <?=$nome ?> </p>
    <p><b>Nota 1: </b> <?=$nota1 ?> </p>
    <p><b>Nota 2: </b> <?=$nota2 ?> </p>
    <p><b>Nota 3: </b> <?=$nota3 ?> </p>
    <p><b>Média: </b> <?=$media ?> </p>
    
    <?php if ($media >= 7): ?>
        <p>Aprovado !!</p>
    <?php else: ?>
        <p>Reprovado</p>
    <?php endif ?>

    <?php if($media == 10): ?>
        <p>Você Atingiu a  nota máxima!!</p>
    <?php endif ?>
 </body>
 </html>

