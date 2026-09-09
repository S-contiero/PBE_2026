<?php
$numero1 = $_POST['numero1'];
$numero2 = $_POST['numero2'];
$operacao = $_POST['operacao'];

echo $numero1 . "<br>";
echo $numero2 . "<br>";
echo $operacao . "<br>";

if($operacao == "+"){
    echo $numero1 + $numero2;
}elseif($operacao == "-"){
    echo $numero1 - $numero2;
}elseif($operacao == "*"){
    echo $numero1 * $numero2;
}else{
    echo $numero1 / $numero2;
}
?>