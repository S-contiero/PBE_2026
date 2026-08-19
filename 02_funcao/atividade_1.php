<?php

function Maioridade($idade){
    if($idade >= 18){
        return "Maior idade";
    }else{
        return "Maior idade";

    }

}
$idade1 = 15;
$idade2 = 18;
$idade3 = 28;

$resultado = Maioridade($idade1);
echo "A idade $idade1 é $resultado <br>";

$resultado = Maioridade($idade2);
echo "A idade $idade2 é $resultado <br>";

$resultado = Maioridade($idade3);
echo "A idade $idade3 é $resultado <br>";   
?>