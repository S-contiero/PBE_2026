<!DOCTYPE html>
<html lang="pt_br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 02</title>
</head>
<body>
    <h1>Resumo da Compra</h1>
    <p><b>Cliente:</b> <?= $nome_cliente ?> </p>
    <table border="1">
        <thead>
            <tr>
                <th>Produto</th>
                <th>Preço</th>
                <th>Quantidade</th>
                <th>Subtotal</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($produtos as $produto): ?>
                <tr>
                    <td><?= $produto['nome']?></td>
                    <td><?= $produto['preco']?></td>
                    <td><?= $produto['quantidade']?></td>
                    <td><?= $produto['subtotal']?></td>
                </tr>
                <?php endforeach ?>
        </tbody>
    </table>
    <br>
    <p><b>Desconto</b> <?=$valorDesconto ?></p>
    <?php if($desconto >0): ?>
        <h2>Parabéns você ganhou um desconto!</h2>
        <?php endif ?>
        <h2>Total da Compra: <?= $total ?></h2>
</body>
</html>
