!DOCTYPE html>
<html lang="pt_br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade 05</title>
</head>
<body>
    <h1>Resultado do IMC</h1>
    <p><b>Nome:</b> <?= $nome?> </p>
    <p><b>Peso em kg:</b> <?= $pesoKg ?> </p>
    <p><b>Altura:</b> <?= $altura ?> </p>
    <p><b>Resultado IMC:</b> <?= $valorImc?> </p>

    <?php if($valorImc < 18.5): ?>
        <h3>Abaixo do peso</h3>
    <?php elseif($valorImc == 18.5 && $valorImc == 24.9): ?>
        <h3>Peso normal</h3>
    <?php elseif($valorImc == 25 && $valorImc == 29.9): ?>
        <h3>Sobrepeso</h3>
    <?php else: ?>
        <h3>Obesidade</h3>
    <?php endif ?>

    
 </body>
 </html>
    
    