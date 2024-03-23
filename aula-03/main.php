<?php
require "Produto.php";
class Main {
    public static function main() {
        // Criando uma instância da classe Produto
        $produto = new Produto("Camiseta", 29.99, 50);

        // Exibindo informações do produto
        echo "Nome do produto: " . $produto->getNome() . "<br>";
        echo "Preço do produto: $" . $produto->getPreco() . "<br>";
        echo "Quantidade em estoque: " . $produto->getQuantidade() . " unidades<br>";

        // Calculando e exibindo o valor total do estoque
        echo "Valor total do estoque: $" . $produto->calcularValorTotal() . "<br>";

        // Atualizando a quantidade em estoque
        $produto->setQuantidade(30);
        echo "Quantidade em estoque após atualização: " . $produto->getQuantidade() . " unidades<br>";
        echo "Novo valor total do estoque: $" . $produto->calcularValorTotal() . "<br>";
    }
}

// Executando o método main da classe Main
Main::main();



?>