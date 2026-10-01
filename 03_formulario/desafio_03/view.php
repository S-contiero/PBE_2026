
<!DOCTYPE html>

<html lang="pt_br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 03</title>
</head>

<body style="background-color:#f2f7ff;">

    <form action="logica.php" method="POST">

        <h1 style="text-align: center; color:#0057b8;">
            VIA Viagens ✈️
        </h1>

        <h3 style="text-align: center; color:#555;">
            Viaje para novos destinos!
        </h3>

        <img 
            src="https://images.unsplash.com/photo-1436491865332-7a61a109cc05"
            width="100%"
            height="250"
        >

        <hr>

        <h2 style="color:#0057b8;"> Dados do Cliente</h2>

        <label>Nome Cliente:</label>
        <br>
        <input type="text" name="nome_cliente">

        <br><br>

        <label>Telefone Cliente:</label>
        <br>
        <input type="number" name="telefone_cliente">

        <br><br>

        <label>CPF Cliente:</label>
        <br>
        <input type="number" name="cpf_cliente">

        <br><br>

        <hr>

        <h2 style="color:#0057b8;">✈️ Dados do Voo</h2>

        <label>Destino:</label>
        <br>
        <input type="text" name="destino">

        <br><br>

        <label>Horário Embarque:</label>
        <br>
        <input type="time" name="horario_embarque">

        <br><br>

        <h3 style="color:#0057b8;">Tipo Passagem:</h3>

        <select name="passagem" required>
            <option value="">Selecione a Passagem</option>
            <option value="economica">Classe Econômica</option>
            <option value="premium">Econômica Premium</option>
            <option value="executiva">Classe Executiva</option>
            <option value="primeira_classe">Primeira Classe</option>
        </select>

        <br><br>

        <h3 style="color:#0057b8;">Tipo Voo:</h3>

        <select name="tipo_voo" required>
            <option value="">Selecione o Voo</option>
            <option value="ida">Ida</option>
            <option value="volta">Volta</option>
            <option value="ida_volta">Ida e Volta</option>
        </select>

        <br><br>

        <h3 style="color:#0057b8;">Valor Passagem:</h3>

        <input type="radio" name="tipo" value="meia">
        <label>Meia</label>

        <br><br>

        <input type="radio" name="tipo" value="inteira">
        <label>Inteira</label>

        <br><br>

        <button type="submit" style="background-color:#ffcc00; color:#0057b8;">
            Finalizar Compra ✈️
        </button>

    </form>

</body>

</html>
