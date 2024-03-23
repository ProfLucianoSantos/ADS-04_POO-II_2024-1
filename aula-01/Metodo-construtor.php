<?php
class Pessoa {
    // Atributos
    public $nome;
    public $idade;

    // Método construtor
    public function __construct($nome, $idade) {
        // Inicializando os atributos com os valores passados como parâmetros
        $this->nome = $nome;
        $this->idade = $idade;

        // Outras inicializações ou lógicas podem ser realizadas aqui, se necessário
    }

    // Método para exibir informações da pessoa
    public function exibirInformacoes() {
        echo "Nome: " . $this->nome . "<br>";
        echo "Idade: " . $this->idade . " anos<br>";
    }
}

// Criando um objeto da classe Pessoa usando o método construtor
$pessoa1 = new Pessoa("João", 25);

// Chamando o método para exibir informações
$pessoa1->exibirInformacoes();
?>
