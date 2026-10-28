<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>locação com desconto</title>
    <h1>Locadora de Veículos</h1>
    <h2>Dados do Cliente</h2>
</head>
<body>
    <form action="logica.php" method="POST">
        <label for="">Nome:</label>
        <br>
        <input type="text" name="nome">
        <br><br>

        <label for="">E-mail:</E-mail></label>
        <br>
        <input type="email" name="email">
        <br><br>

    <h2>Dados da Locação</h2>
    <br>
        <label for="">Data de retirada:</Data></label>
        <br>
        <input type="date" name="data">
        <br><br>
         <label for="">Quantidade de dias:</Quantidade></label>
        <br>
        <input type="number" name="number">
        <br><br>
        
    <select name="Categoria do veículos:" required>
        <option value="">Selecione uma categoria</option>
        <option value="+">Econômico - R$100,00/dia</option>
        <option value="-">Intermediário - R$150,00/dia</option>
        <option value="*">SUV - R$250,00/dia</option>
    </select>
        <br><br>
        <h2>Adicionais</h2>
        <label for="">Seguro total (R$40,00/dia):</label>
        <br>
        <input type="radio" name="seguro" value="Sim">
        <label for="">Sim</label>
        <input type="radio" name="seguro" value="Não">
        <label for="">Não</label><br>
        <br>

        <label for="">GPS (R$15,00/dia):</label>
        <br>
        <input type="radio" name="gps" value="Sim">
        <label for="">Sim</label>
        <input type="radio" name="gps" value="Não">
        <label for="">Não</label><br>
        <br>

        <label for="">Cadeirinha infantil (R$20,00/dia):</label>
        <br>
        <input type="radio" name="infantil" value="Sim">
        <label for="">Sim</label>
        <input type="radio" name="infantil" value="Não">
        <label for="">Não</label><br>
        <br>
        <button type="submit">Gerar Contrato</button>
</form>
</body>
</html>