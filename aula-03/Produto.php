<?php


class Produto {
    private $nome;
    private $preco;
    private $quantidade;

    // Construtor para inicializar os atributos
    public function __construct($nome, $preco, $quantidade) {
        $this->nome = $nome;
        $this->preco = $preco;
        $this->quantidade = $quantidade;
    }

    // Métodos para obter os atributos
    public function getNome() {
        return $this->nome;
    }

    public function getPreco() {
        return $this->preco;
    }

    public function getQuantidade() {
        return $this->quantidade;
    }

    // Métodos para definir os atributos
    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function setPreco($preco) {
        $this->preco = $preco;
    }

    public function setQuantidade($quantidade) {
        $this->quantidade = $quantidade;
    }

    // Método para calcular o valor total do estoque
    public function calcularValorTotal() {
        return $this->preco * $this->quantidade;
    }
}

?>