<?php
$nome = $_POST['nome'];
$nomeFilme = $_POST['nomeFilme'];
$qtd_ingresso= $_POST['qtd_ingresso'];
$tipo= $_POST['tipo'];
$preco = 30;

if($tipo == "Meia-Entrada"){
    $preco = $preco / 2;
}
if($qtd_ingresso > 10){
    $desconto = $preco * 0.1;
    $preco = $preco - $desconto;
}
$total = $preco * $qtd_ingresso;