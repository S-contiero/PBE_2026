<?php
$categoria = $_POST['categoria'];
$dias = $_POST['dias'];

function calcularSubtotal($diaria, $dias) {
    return $diaria * $dias;
}

function calcularPercentualDesconto($dias) {
    if ($dias >= 10) {
        return 20;
    } elseif ($dias >= 5) {
        return 10;
    } else {
        return 0;
    }
}


if ($categoria == "Economico") {
    $diariaVeiculo = 100;
} elseif ($categoria == "Intermediario") {
    $diariaVeiculo = 150;
} elseif ($categoria == "Luxo") {
    $diariaVeiculo = 250;
} else {
    $diariaVeiculo = 0;
}


$diariaAdicionais = 0;

if ($seguro == "Sim") {
    $diariaAdicionais += 40;
}

if ($cadeirinha == "Sim") {
    $diariaAdicionais += 20;
}

if ($gps == "Sim") {
    $diariaAdicionais += 15;
}


$subtotalVeiculo = calcularSubtotal($diariaVeiculo, $dias);

$subtotalAdicionais = calcularSubtotal($diariaAdicionais, $dias);


$total = $subtotalVeiculo + $subtotalAdicionais;


$percentualDesconto = calcularPercentualDesconto($dias);

$valorDesconto = $total * ($percentualDesconto / 100);


$totalPagar = $total - $valorDesconto;


require_once "view_relatorio.php";

?>
