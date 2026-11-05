<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Relatório</title>
</head>
<body>
    <h1>Produto Cadastrado</h1>

    <p>Nome: <?= $produto->getNome() ?></p>
    <p>Quantidade: <?= $produto->getQuantidade() ?></p>
    <p>Preço: R$ <?= $produto->getPreco() ?></p>
    <p>Total em Estoque: R$ <?= number_format($produto->CalcularTotal(), 2, ',', '.') ?></p>
    <p>Valor Desconto: R$ <?= number_format($produto->calcularDesconto(), 2, ',', '.') ?></p>
    <p>Total com Desconto: R$ <?= number_format($produto->calcularTotalComDesconto(), 2, ',', '.') ?></p>
    <p>Situação do Estoque: <?= $produto->verificarEstoque() ?></p>

    <?php if ($produto->calcularDesconto() > 10): ?>
        <p>Prabéns! Você ganhou 10% de desconto!</p>
    <?php else: ?>
        <p>Dica: Comprando 10 unidades ou mais você ganha 10% de desconto.</p>
    <?php endif ?>

    <a href="view.php">Cadastrar outro</a>
</body>
</html>