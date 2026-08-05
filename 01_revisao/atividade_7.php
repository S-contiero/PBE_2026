<?php 
$notas_alunos =[
    "Gabriel" => 8.5,
    "Lavinia" => 7.4,
    "Vitor" => 8.0,
    "Sophia" =>9.0

]; 
$media = 0;
foreach ($notas_alunos as $nome => $nota){
    echo"O aluno: $nome, tirou a nota $nota <br>";
    $media += $nota;


}
$media = $media / 6;
echo "A média da turma é: $media";
?>