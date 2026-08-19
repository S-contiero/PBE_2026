<?php
function analisarNumero($numero){
    $dobro = $numero * $numero;
    $triplo = $numero * 3;
    $quadrado = $numero ** 2;
    if ($numero >= 0){
        $situacao = "Positivo";
    }else{
        $situacao = "Negativo";
    }

    return[
        "numero" => $numero,
        "dobro" => $dobro,
        "triplo" => $triplo,
        "quadrado" => $quadrado,
        "situacao" => $situacao
    ];
}
$resultado = analisarNumero(6);
echo "Número: " . $resultado["numero"] . "<br>";
echo "Dobro: " . $resultado["dobro"] . "<br>";
echo "Triplo: " . $resultado["triplo"] . "<br>";
echo "Quadrado: " . $resultado["quadrado"] . "<br>";
echo "Situação: " . $resultado["situacao"] . "<br>";
?>