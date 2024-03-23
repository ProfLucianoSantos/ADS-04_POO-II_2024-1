<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Relatório de Cadastro</title>
    <style>
        table {
            width: 80%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        th, td {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <?php
    include_once 'Cliente.php';
    include_once 'Veiculo.php';
    include_once 'OrdemServico.php';
    include_once 'Servico.php';

    // Simulação de cadastro
    $cliente = new Cliente(1, 'Maria Cliente', '987.654.321-01', '7654321', '9876-5432', 'Pessoa Física');
    $veiculo = new Veiculo('ABC1234', 'Toyota', 'Corolla');
    $ordemServico = new OrdemServico(1001, '2024-03-01', null);
    $servico = new Servico(1, 'Manutenção', 200.0);

    // Associar veículo ao cliente
    $cliente->adicionarVeiculo($veiculo);

    // Associar cliente à ordem de serviço
    $ordemServico->associarCliente($cliente);

    // Adicionar serviço à ordem de serviço
    $ordemServico->adicionarServico($servico);
    ?>

    <h2>Relatório de Cadastro</h2>

    <h3>Cliente</h3>
    <table>
        <tr>
            <th>Código</th>
            <th>Nome</th>
            <th>CPF</th>
            <th>RG</th>
            <th>Telefone</th>
            <th>Tipo Cliente</th>
        </tr>
        <tr>
            <td><?php echo $cliente->getCodigo(); ?></td>
            <td><?php echo $cliente->getNome(); ?></td>
            <td><?php echo $cliente->getCPF(); ?></td>
            <td><?php echo $cliente->getRG(); ?></td>
            <td><?php echo $cliente->getTelefone(); ?></td>
            <td><?php echo $cliente->getTipoCliente(); ?></td>
        </tr>
    </table>

    <h3>Veículos do Cliente</h3>
    <table>
        <tr>
            <th>Número da Placa</th>
            <th>Marca</th>
            <th>Modelo</th>
        </tr>
        <?php foreach ($cliente->getVeiculos() as $veiculoCliente): ?>
            <tr>
                <td><?php echo $veiculoCliente->getNumPlaca(); ?></td>
                <td><?php echo $veiculoCliente->getMarca(); ?></td>
                <td><?php echo $veiculoCliente->getModelo(); ?></td>
            </tr>
        <?php endforeach; ?>
    </table>

    <h3>Ordem de Serviço</h3>
    <table>
        <tr>
            <th>Número da OS</th>
            <th>Data de Entrada</th>
            <th>Data de Saída</th>
        </tr>
        <tr>
            <td><?php echo $ordemServico->getNumOs(); ?></td>
            <td><?php echo $ordemServico->getDataEntrada(); ?></td>
            <td><?php echo $ordemServico->getDataSaida(); ?></td>
        </tr>
    </table>

    <h3>Serviço</h3>
    <table>
        <tr>
            <th>Código do Serviço</th>
            <th>Descrição</th>
            <th>Valor</th>
        </tr>
        <tr>
            <td><?php echo $servico->getCodServico(); ?></td>
            <td><?php echo $servico->getDescricao(); ?></td>
            <td><?php echo $servico->getValor(); ?></td>
        </tr>
    </table>
</body>
</html>
