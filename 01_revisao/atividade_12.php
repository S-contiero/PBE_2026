<?php
$idades = [7, 14, 17, 21, 24, 28, 30, 35];
$media = 0;
$maior18 = 0;
$soma = 0;

foreach ($idades as $idade){
    $soma += $idade;

    if($idade >= 18) {
        $maior18 += 1;

    }
}
$media = $soma / count($idades);

echo "media das idades: " . $media . "<br>";
echo "pessoas com 18 anos ou mais: " . $maior18;
?>
