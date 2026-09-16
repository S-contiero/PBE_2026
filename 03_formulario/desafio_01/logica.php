<?php
$nome_funcionario = $_POST['nome_funcionario'];
$salario_bruto = $_POST['salario_bruto'];
$horas_extras = $_POST['horas_extras'];
$beneficios = $_POST['beneficios'];
$descontos = $_POST['descontos'];

echo "Nome: $nome_funcionario <br>";

// Valor Hora Trabalhada
$valor_hora = $salario_bruto / 160;

// Adicional de Hora Extra
$valor_extra = $valor_hora * 1.5;

// Total de Hora Extra
$total_extras = $horas_extras * $valor_extra;

// Salário Bruto Total
$salarioBruto_semDesconto = $salario_bruto + $valor_extra + $beneficios;

// Imposto Calculo
if ($salarioBruto_semDesconto >= 5000) {
    $imposto = $salarioBruto_semDesconto * 0.10;
} elseif ($salarioBruto_semDesconto >= 3000) {
    $imposto = $salarioBruto_semDesconto * 0.5;
} else {
    $imposto = 0;
}

// Salário Líquido
$salario_liquido = ($salario_bruto + $horas_extras + $beneficios) - $descontos;

// Status Funcionário
if ($salario_liquido >= 4000) {
    echo "Status: Bem remunerado <br>";
} else {
    echo "Status: Médio <br>";
}

echo "Salário Bruto: $salario_bruto <br>";
echo "Salário Bruto + Total com Horas Extras + Benefícios: $salarioBruto_semDesconto <br>";
echo "Desconto: $descontos <br>";
echo "Imposto Aplicado: $imposto <br>";
echo "Salário Líquido: $salario_liquido <br>";
?>
