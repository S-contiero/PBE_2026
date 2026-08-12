<?php

$pessoa_iadade = 13;
$acompanhada = true;

if ($pessoa_iadade >= 18){
    echo"Pode entra sozinha!";

}
elseif ($pessoa_iadade >=14 && $pessoa_iadade <= 17 && $acompanhada == true){
    echo"entrada somente com acompanhante";
}
else
    echo "Menores de 14 não pode entra, mesmo com acompanhados"


?>