<?php
$nome_cliente = $_POST['nome_cliente'];
$nome_produto1 = $_POST['nome_produto'];
$preco1 = $_POST['preco1'];
$qtd1 = $_POST['qtd1'];

$nome_produto2 = $_POST['nome_produto'];
$preco2 = $_POST['preco2'];
$qtd2 = $_POST['qtd2'];

$nome_produto3 = $_POST['nome_produto'];
$preco3 = $_POST['preco3'];
$qtd3 = $_POST['qtd3'];

$produtos = [
    ["nome" => $nome_produto1,
    'preco' => $preco1,
    'quantidade' => $qtd1,
    'subtotal' => $preco1 * $qtd1],

    ["nome" => $nome_produto2, 'preco' => $preco2, 'quantidade' => $qtd2, 'subtotal' => $preco2 * $qtd2],
    ["nome" => $nome_produto3, 'preco' => $preco3, 'quantidade' => $qtd3, 'subtotal' => $preco3 * $qtd3]

];
$total = 0;
foreach ($produtos as $produto){
    $total += $produto['subtotal'];
}
$desconto = 0;
if($total > 500){
    $desconto = 10;
}
$valorDesconto = $total * ($desconto/100);
$total = $total - $valorDesconto;
require_once 'view_relatorio.php';

?>