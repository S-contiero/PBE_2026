<?php
$numeros = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
$numero_maior = -99999999;
 
foreach ($numeros as $numero){
    if($numero > $numero_maior){
        $numero_maior = $numero;
    }
}
echo "O numero maior é: $numero_maior";
?>
