<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simulação de Cadastro</title>
</head>
<body>
    <?php
    include 'Cliente.php';
    include 'Veiculo.php';
    include 'OrdemServico.php';


    // Simulação de cadastro
    $cliente = new Cliente(1, 'Maria Cliente', '987.654.321-01', '7654321', '9876-5432', 'Pessoa Física');
    $veiculo = new Veiculo('ABC1234', 'Toyota', 'Corolla');
    $ordemServico = new OrdemServico(1001, '2024-03-01', null); // A data de saída ainda não está definida
    $servico = new Servico(1, 'Manutenção', 200.0);

    // Associar veículo ao cliente
    $cliente->adicionarVeiculo($veiculo);

    // Associar cliente à ordem de serviço
    $ordemServico->associarCliente($cliente);

    // Adicionar serviço à ordem de serviço
    $ordemServico->adicionarServico($servico);

    // Exibição dos dados simulados
    echo '<h2>Simulação de Cadastro</h2>';
    echo '<h3>Cliente:</h3>';
    echo '<pre>' . print_r($cliente, true) . '</pre>';

    echo '<h3>Veículos do Cliente:</h3>';
    echo '<pre>' . print_r($cliente->getVeiculos(), true) . '</pre>';

    echo '<h3>Ordem de Serviço:</h3>';
    echo '<pre>' . print_r($ordemServico, true) . '</pre>';

    echo '<h3>Serviço:</h3>';
    echo '<pre>' . print_r($servico, true) . '</pre>';
    ?>
</body>
</html>
