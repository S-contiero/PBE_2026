<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade 4</title>
</head>
<body>
    <form action="logica.php" method="POST">
        <h1 style="text-align: center;">Calcular Média do Aluno</h1>
       <h3>Nome do Aluno:</h3>
        <input type="text" name="nome_aluno" placeholder="Nome do aluno:" required>
        <br><br>
        <h3>Nota 1:</h3>
         <input type="number" name="nota_1" placeholder="Nota 1:" required>
         <br><br>
          <h3>Nota 2:</h3>
         <input type="number" name="nota_2" placeholder="Nota 2:" required>
         <br><br>
          <h3>Nota 3:</h3>
         <input type="number" name="nota_3" placeholder="Nota 3:" required>
         <br><br>
        <button type="submit">Calcular Média</button>
    </form>
</body>
</html>

</body>