<?php
    // Conectar ao banco de dados e realizar a consulta
    // Substitua este trecho pelo código que consulta o banco de dados e obtém os dados necessários
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
   // Consulta para obter os dados necessários
    $sql = "SELECT cliente.nome AS cliente, pedido.id AS pedido, GROUP_CONCAT(produto.nome SEPARATOR ', ') AS produtos 
            FROM cliente 
            INNER JOIN pedido ON cliente.id = pedido.id_cliente 
            INNER JOIN pedido_produto ON pedido.id = pedido_produto.id_pedido 
            INNER JOIN produto ON pedido_produto.id_produto = produto.id 
            GROUP BY cliente.nome, pedido.id";

    $result = $conn->query($sql);

    // Exibir os dados na tabela
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $row["cliente"] . "</td>";
            echo "<td>" . $row["pedido"] . "</td>";
            echo "<td>" . $row["produtos"] . "</td>";
            echo "</tr>";
            echo "</br>";
        }
    } else {
        echo "<tr><td colspan='3'>Nenhum resultado encontrado</td></tr>";
    }
    $conn->close();
?>