<?php
$nome = $_POST['nome'];
$peso = $_POST['pesso_em_kg'];
$altura = $_POST['altura_em_metro'];

$altura = $altura *100

$IMC = $altura * $altura / $peso;

require_once "view_relatorio.php";

?>