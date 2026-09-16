<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 01</title>
</head>
<body>
    <form action="logica.php" method="POST">
        <h1 style="text-align: center;">Calculadora de Salário Líquido</h1>
       <h3>Nome do funcionário:</h3>
        <input type="text" name="nome_funcionario" placeholder="Nome do funcionário:" required>
        <br><br>
        <h3>Salário Bruto:</h3>
         <input type="number" name="salario_bruto" placeholder="Salário Bruto:" required>
         <br><br>
          <h3>Horas Extras:</h3>
         <input type="number" name="horas_extras" placeholder="Horas Extras:" required>
         <br><br>
          <h3>Benefícios:</h3>
         <input type="number" name="beneficios" placeholder="Benefícios:" required>
         <br><br>
          <h3>Descontos:</h3>
         <input type="number" name="descontos" placeholder="Descontos:" required>
         <br><br>
        <button type="submit">Calcular Salário</button>
    </form>
</body>
</html>

</body>