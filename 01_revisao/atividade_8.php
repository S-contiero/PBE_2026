<?php

$numero1 = 20;
$numero2 = 5;
$operacao = "/";

switch ($operacao) {

    case "+":
        echo $numero1 + $numero2;
        break;

    case "-":
        echo $numero1 - $numero2;
        break;

    case "*":
        echo $numero1 * $numero2;
        break;

    case "/":
        if ($numero2 == 0) {
            echo "Erro: divisão por zero.";
        } else {
            echo $numero1 / $numero2;
        }
        break;

    default:
        echo "Operação inválida.";
}

?>
