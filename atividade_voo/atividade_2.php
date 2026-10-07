<?php
require_once 'logica.php';

$voos = obterVoos();
$busca = $_GET['busca'] ?? '';

if ($busca !== '') {
    $voos = array_filter($voos, function($v) use ($busca) {
        return stripos($v['destino'], $busca) !== false || stripos($v['origem'], $busca) !== false;
    });
}
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Agência de Voos - Painel Principal</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 20px; background-color: #f4f6f8; color: #333; }
        h1, h2 { color: #004085; }
        .container { max-width: 900px; margin: 0 auto; background: #fff; padding: 20px; border-radius: 8px; box-shadow: 0 2px 5px rgba(0,0,0,0.1); }
        .alert { padding: 10px 15px; border-radius: 4px; margin-bottom: 20px; }
        .sucesso { background: #d4edda; color: #155724; border: 1px solid #c3e6cb; }
        .erro { background: #f8d7da; color: #721c24; border: 1px solid #f5c6cb; }
        table { width: 100%; border-collapse: collapse; margin-top: 15px; }
        th, td { border: 1px solid #ddd; padding: 10px; text-align: left; }
        th { background-color: #004085; color: white; }
        .card-form { background: #e9ecef; padding: 15px; border-radius: 6px; margin-bottom: 20px; }
        .btn { background: #0056b3; color: #fff; border: none; padding: 8px 12px; cursor: pointer; border-radius: 4px; text-decoration: none; display: inline-block; }
        .btn:hover { background: #003d80; }
        .nav-link { margin-bottom: 20px; display: block; }
        input, select { padding: 8px; margin: 5px 0 10px; width: 100%; box-sizing: border-box; }
        .grid { display: flex; gap: 15px; }
        .col { flex: 1; }
    </style>
</head>
<body>

<div class="container">
    <h1>✈️ Agência de Voos - Reservas</h1>
    <a href="view_relatorio.php" class="btn" style="background: #28a745;">📊 Ver Relatórios de Vendas</a>
    <hr>

    <?php if (isset($_SESSION['mensagem'])): ?>
        <div class="alert <?= $_SESSION['msg_tipo'] ?>">
            <?= $_SESSION['mensagem'] ?>
        </div>
        <?php 
            unset($_SESSION['mensagem']); 
            unset($_SESSION['msg_tipo']);
        ?>
    <?php endif; ?>

    <!-- Formulário de Busca -->
    <form method="GET" action="view.php" style="margin-bottom: 20px;">
        <label>Pesquisar Origem/Destino:</label>
        <div style="display: flex; gap: 10px;">
            <input type="text" name="busca" value="<?= htmlspecialchars($busca) ?>" placeholder="Ex: Rio de Janeiro">
            <button type="submit" class="btn">Buscar</button>
            <?php if ($busca): ?>
                <a href="view.php" class="btn" style="background:#6c757d;">Limpar</a>
            <?php endif; ?>
        </div>
    </form>

    <!-- Lista de Voos -->
    <h2>Voos Disponíveis</h2>
    <table>
        <thead>
            <tr>
                <th>Voo</th>
                <th>Origem</th>
                <th>Destino</th>
                <th>Preço</th>
                <th>Vagas</th>
                <th>Ação</th>
            </tr>
        </thead>
        <tbody>
            <?php if (empty($voos)): ?>
                <tr><td colspan="6">Nenhum voo encontrado.</td></tr>
            <?php else: ?>
                <?php foreach ($voos as $voo): ?>
                    <tr>
                        <td><strong><?= $voo['numero'] ?></strong></td>
                        <td><?= $voo['origem'] ?></td>
                        <td><?= $voo['destino'] ?></td>
                        <td>R$ <?= number_format($voo['preco'], 2, ',', '.') ?></td>
                        <td><?= $voo['vagas'] ?></td>
                        <td>
                            <?php if ($voo['vagas'] > 0): ?>
                                <form method="POST" action="logica.php" style="display:flex; gap: 5px;">
                                    <input type="hidden" name="acao" value="reservar">
                                    <input type="hidden" name="numero_voo" value="<?= $voo['numero'] ?>">
                                    <input type="text" name="nome_passageiro" placeholder="Nome do Passageiro" required style="margin:0; padding:4px;">
                                    <button type="submit" class="btn">Reservar</button>
                                </form>
                            <?php else: ?>
                                <span style="color:red; font-weight:bold;">Esgotado</span>
                            <?php endif; ?>
                        </td>
                    </tr>
                <?php endforeach; ?>
            <?php endif; ?>
        </tbody>
    </table>

    <br><hr><br>

    <!-- Cadastro de Novo Voo -->
    <div class="card-form">
        <h2>Cadastrar Novo Voo</h2>
        <form method="POST" action="logica.php">
            <input type="hidden" name="acao" value="cadastrar_voo">
            <div class="grid">
                <div class="col">
                    <label>Número do Voo:</label>
                    <input type="text" name="numero" placeholder="Ex: SV404" required>
                </div>
                <div class="col">
                    <label>Preço (R$):</label>
                    <input type="number" step="0.01" name="preco" placeholder="500.00" required>
                </div>
                <div class="col">
                    <label>Vagas:</label>
                    <input type="number" name="vagas" placeholder="10" required>
                </div>
            </div>
            <div class="grid">
                <div class="col">
                    <label>Origem:</label>
                    <input type="text" name="origem" placeholder="Ex: Curitiba" required>
                </div>
                <div class="col">
                    <label>Destino:</label>
                    <input type="text" name="destino" placeholder="Ex: Fortaleza" required>
                </div>
            </div>
            <button type="submit" class="btn" style="margin-top:10px;">Cadastrar Voo</button>
        </form>
    </div>
</div>

</body>
</html>




