<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>atividade_1</title>
</head>
<body>
    <h1>Carrinho de compras</h1>
    <form action="logica.php" method="POST">
    <h1>Dados do Cliente</h1>
        <label for="">Nome:</label>
        <br>
        <input type="text" name="nome_cliente">
        <br><br>

    <h1>Produto 1</h1>   

        <label for="">Nome do produto:</label>
        <br>
        <input type="text" name="nome_produto">
        <br><br>

        <label for="">Preço:</label>
        <br>
        <input type="number" name="preco1">
        <br><br>

        <label for="">Quantidade:</label>
        <br>
        <input type="number" name="qtd1">
        <br><br>

    <h1>Produto 2</h1>   

        <label for="">Nome do produto:</label>
        <br>
        <input type="text" name="nome_produto">
        <br><br>

        <label for="">Preço:</label>
        <br>
        <input type="number" name="preco2">
        <br><br>

        <label for="">Quantidade:</label>
        <br>
        <input type="number" name="qtd2">
        <br><br>

    <h1>Produto 3</h1>   

        <label for="">Nome do produto:</label>
        <br>
        <input type="text" name="nome_produto">
        <br><br>

        <label for="">Preço:</label>
        <br>
        <input type="number" name="preco3">
        <br><br>
        
        <label for="">Quantidade:</label>
        <br>
        <input type="number" name="qtd3">
        <br><br>

        <button type="submit">Finalizar Compra</button>
    </form>
    
</body>
</html>