<?php
$preco_produto = 30;
$qtd_produto = 15;
$porcentual_desconto = 10;

function calcularPrecoFinal($preco, $qtd, $porcentual){
    $desconto = ($preco * $qtd)/100;
    $compra = $preco * $qtd = $desconto;
    return $compra;
}
$resultado = calcularPrecoFinal($preco_produto, $qtd_produto, $porcentual_desconto);
echo "O preço: $preco_produto <br>";
echo "A quatidade: $qtd_produto <br>";
echo "O desconto: $porcentual_desconto <br>";
echo "O valor final: $resultado <br>";
?>