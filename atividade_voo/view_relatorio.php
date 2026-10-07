<?php
require_once 'logica.php';

$voos = obterVoos();
$totais = obterTotaisRelatorio();
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Relatório da Agência</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 20px; background-color: #f4f6f8; color: #333; }
        h1, h2 { color: #004085; }
        .container { max-width: 900px; margin: 0 auto; background: #fff; padding: 20px; border-radius: 8px; box-shadow: 0 2px 5px rgba(0,0,0,0.1); }
        .btn { background: #0056b3; color: #fff; padding: 8px 12px; border-radius: 4px; text-decoration: none; display: inline-block; }
        .cards { display: flex; gap: 15px; margin-bottom: 25px; }
        .card { flex: 1; background: #e9ecef; padding: 15px; border-radius: 6px; text-align: center; }
        .card h3 { margin: 0 0 10px 0; font-size: 14px; color: #555; }
        .card p { margin: 0; font-size: 22px; font-weight: bold; color: #004085; }
        table { width: 100%; border-collapse: collapse; margin-top: 10px; margin-bottom: 25px; }
        th, td { border: 1px solid #ddd; padding: 8px; text-align: left; }
        th { background-color: #f1f1f1; }
        .passageiros-list { background: #fafafa; padding: 10px; border-left: 3px solid #0056b3; margin-bottom: 15px; }
    </style>
</head>
<body>

<div class="container">
    <h1>📊 Relatório de Desempenho e Passageiros</h1>
    <a href="view.php" class="btn">← Voltar ao Painel Principal</a>
    <hr><br>

    <!-- Métricas -->
    <div class="cards">
        <div class="card">
            <h3>TOTAL DE VOOS</h3>
            <p><?= $totais['total_voos'] ?></p>
        </div>
        <div class="card">
            <h3>TOTAL DE RESERVAS</h3>
            <p><?= $totais['total_reservas'] ?></p>
        </div>
        <div class="card">
            <h3>FATURAMENTO TOTAL</h3>
            <p>R$ <?= number_format($totais['faturamento_total'], 2, ',', '.') ?></p>
        </div>
    </div>

    <!-- Detalhamento por Voo -->
    <h2>Detalhamento dos Voos e Passageiros</h2>

    <?php foreach ($voos as $voo): ?>
        <div class="passageiros-list">
            <h3>Voo <?= $voo['numero'] ?> (<?= $voo['origem'] ?> ➔ <?= $voo['destino'] ?>)</h3>
            <p>
                <strong>Preço do Bilhete:</strong> R$ <?= number_format($voo['preco'], 2, ',', '.') ?> | 
                <strong>Vagas Restantes:</strong> <?= $voo['vagas'] ?> | 
                <strong>Reservas Confirmadas:</strong> <?= count($voo['passageiros']) ?>
            </p>

            <?php if (!empty($voo['passageiros'])): ?>
                <table>
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Nome do Passageiro</th>
                            <th>Data da Reserva</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($voo['passageiros'] as $idx => $p): ?>
                            <tr>
                                <td><?= $idx + 1 ?></td>
                                <td><?= htmlspecialchars($p['nome']) ?></td>
                                <td><?= $p['data_reserva'] ?></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            <?php else: ?>
                <p><em>Nenhuma reserva feita para este voo ainda.</em></p>
            <?php endif; ?>
        </div>
    <?php endforeach; ?>

</div>

</body>
</html>

