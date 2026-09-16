<?php
$nome_aluno = $_POST['nome_aluno'];
$nota1 = $_POST['nota_1'];
$nota2 = $_POST['nota_2'];
$nota3 = $_POST['nota_3'];

$media = ($nota1 + $nota2 + $nota3)/3;

if($media >10){
    $media = 10;
}

require_once "view_relatorio.php";

?>