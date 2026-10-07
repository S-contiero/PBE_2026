<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// Inicializa o "banco de dados" na sessão caso ainda não exista
function inicializarDados() {
    if (!isset($_SESSION['voos'])) {
        $_SESSION['voos'] = [
            'SV101' => [
                'numero' => 'SV101',
                'origem' => 'São Paulo (GRU)',
                'destino' => 'Rio de Janeiro (GIG)',
                'preco' => 350.00,
                'vagas' => 2,
                'passageiros' => []
            ],
            'SV202' => [
                'numero' => 'SV202',
                'origem' => 'São Paulo (GRU)',
                'destino' => 'Salvador (SSA)',
                'preco' => 780.00,
                'vagas' => 15,
                'passageiros' => []
            ],
            'SV303' => [
                'numero' => 'SV303',
                'origem' => 'Brasília (BSB)',
                'destino' => 'Rio de Janeiro (GIG)',
                'preco' => 420.00,
                'vagas' => 5,
                'passageiros' => []
            ]
        ];
    }
}

// Garante que os dados estejam prontos
inicializarDados();

// Processa ações enviadas via formulários (POST)
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $acao = $_POST['acao'] ?? '';

    if ($acao === 'reservar') {
        $numero_voo = $_POST['numero_voo'] ?? '';
        $nome = trim($_POST['nome_passageiro'] ?? '');

        if ($numero_voo && $nome && isset($_SESSION['voos'][$numero_voo])) {
            $voo = &$_SESSION['voos'][$numero_voo];
            
            if ($voo['vagas'] > 0) {
                $voo['passageiros'][] = [
                    'nome' => $nome,
                    'data_reserva' => date('d/m/Y H:i')
                ];
                $voo['vagas']--;
                $_SESSION['mensagem'] = "✅ Reserva efetuada com sucesso para $nome no voo $numero_voo!";
                $_SESSION['msg_tipo'] = "sucesso";
            } else {
                $_SESSION['mensagem'] = "❌ Voo $numero_voo está lotado!";
                $_SESSION['msg_tipo'] = "erro";
            }
        }
        header('Location: view.php');
        exit;
    }

    if ($acao === 'cadastrar_voo') {
        $numero = strtoupper(trim($_POST['numero']));
        $origem = trim($_POST['origem']);
        $destino = trim($_POST['destino']);
        $preco = (float)$_POST['preco'];
        $vagas = (int)$_POST['vagas'];

        if ($numero && $origem && $destino && $preco > 0 && $vagas > 0) {
            $_SESSION['voos'][$numero] = [
                'numero' => $numero,
                'origem' => $origem,
                'destino' => $destino,
                'preco' => $preco,
                'vagas' => $vagas,
                'passageiros' => []
            ];
            $_SESSION['mensagem'] = "✈️ Voo $numero cadastrado com sucesso!";
            $_SESSION['msg_tipo'] = "sucesso";
        } else {
            $_SESSION['mensagem'] = "❌ Preencha todos os campos corretamente!";
            $_SESSION['msg_tipo'] = "erro";
        }
        header('Location: view.php');
        exit;
    }
}

// Funções auxiliares de leitura
function obterVoos() {
    return $_SESSION['voos'] ?? [];
}

function obterTotaisRelatorio() {
    $voos = obterVoos();
    $total_reservas = 0;
    $faturamento_total = 0;

    foreach ($voos as $voo) {
        $qtd = count($voo['passageiros']);
        $total_reservas += $qtd;
        $faturamento_total += ($qtd * $voo['preco']);
    }

    return [
        'total_voos' => count($voos),
        'total_reservas' => $total_reservas,
        'faturamento_total' => $faturamento_total
    ];
}

