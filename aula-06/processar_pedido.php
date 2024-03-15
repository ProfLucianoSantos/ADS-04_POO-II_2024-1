<?php

include 'Cliente.php';
include 'Produto.php';
include 'Pedido.php';

// Dados de conexão com o banco de dados
$servername = "localhost:3307";
$username = "root";
$password = "";
$dbname = "pedido";


// Conexão com o banco de dados
$conn = new mysqli($servername, $username, $password, $dbname);

// Verifica se ocorreu algum erro na conexão
if ($conn->connect_error) {
    die("Erro de conexão: " . $conn->connect_error);
}

// Processamento do formulário
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $clienteNome = $_POST["cliente"];
    $produtos = explode(",", $_POST["produtos"]);
    $preco = $_POST["preco"];

    // Inserindo cliente
    $sql = "INSERT INTO cliente (nome) VALUES ('$clienteNome')";
    if ($conn->query($sql) === TRUE) {
        $clienteId = $conn->insert_id; // Obtém o ID do cliente inserido
    } else {
        echo "Erro ao inserir cliente: " . $conn->error;
    }

    // Inserindo produtos
    foreach ($produtos as $produtoNome) {
        $sql = "INSERT INTO produto (nome, preco) VALUES ('$produtoNome', $preco)"; // Supondo que o preço seja 0.0 inicialmente
        if ($conn->query($sql) === TRUE) {
            // Produto inserido com sucesso
        } else {
            echo "Erro ao inserir produto: " . $conn->error;
        }
    }

    // Inserindo pedido
    $sql = "INSERT INTO pedido (id_cliente) VALUES ('$clienteId')";
    if ($conn->query($sql) === TRUE) {
        $pedidoId = $conn->insert_id; // Obtém o ID do pedido inserido
    } else {
        echo "Erro ao inserir pedido: " . $conn->error;
    }

    // Associando produtos ao pedido
    foreach ($produtos as $produtoNome) {
        $sql = "INSERT INTO pedido_produto (id_pedido, id_produto) VALUES ('$pedidoId', (SELECT id FROM produto WHERE nome = '$produtoNome'))";
        if ($conn->query($sql) !== TRUE) {
            echo "Erro ao associar produto ao pedido: " . $conn->error;
        }
    }

    echo "Pedido cadastrado com sucesso!";
}

$conn->close();

?>
