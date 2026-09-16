<!DOCTYPE html> 
<html lang="en"> 
<head> 
    <meta charset="UTF-8"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <title>Atividade 05</title> 
</head> 
<body> 
    <form action="logica.php" method="POST"> 
        <h1>Calcular IMC</h1> 
        <h3>Nome:</h3> 
        <input type="text" name="nome" placeholder="Nome:" required> 
        <br><br> 

        <h3>Peso em kg:</h3> 
        <input type="number" name="pesoKg" placeholder="Peso em kg:" step="0.01" required> 
        <br><br> 

        <h3>Altura em metros:</h3> 
        <input type="number" name="altura" placeholder="Altura em metros:" step="0.01" required> 
        <br><br> 

        <button type="submit">Calcular</button> 
    </form> 
</body> 
</html>