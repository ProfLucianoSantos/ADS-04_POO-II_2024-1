<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
</head>
<body>
    <h2>Cadastro</h2>
    
    <form action="relatorio.php" method="post">
        <label for="nome">Nome:</label>
        <input type="text" name="nome" required><br>

        <label for="cpf">CPF:</label>
        <input type="text" name="cpf" required><br>

        <label for="rg">RG:</label>
        <input type="text" name="rg" required><br>

        <label for="telefone">Telefone:</label>
        <input type="text" name="telefone" required><br>

        <label for="tipoCliente">Tipo de Cliente:</label>
        <input type="text" name="tipoCliente" required><br>

        <label for="numPlaca">Número da Placa:</label>
        <input type="text" name="numPlaca" required><br>

        <label for="marca">Marca do Veículo:</label>
        <input type="text" name="marca" required><br>

        <label for="modelo">Modelo do Veículo:</label>
        <input type="text" name="modelo" required><br>

        <label for="numOs">Número da OS:</label>
        <input type="text" name="numOs" required><br>

        <label for="dataEntrada">Data de Entrada:</label>
        <input type="text" name="dataEntrada" required><br>

        <label for="descricaoServico">Descrição do Serviço:</label>
        <input type="text" name="descricaoServico" required><br>

        <label for="valorServico">Valor do Serviço:</label>
        <input type="text" name="valorServico" required><br>

        <input type="submit" value="Submeter">
    </form>
</body>
</html>
