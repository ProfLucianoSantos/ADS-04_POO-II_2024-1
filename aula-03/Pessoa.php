<?php
//Criar uma classe chamada Pessoa com os atributos nome e idade.
//Implemente métodos parea obter e definir atributos.

class Pessoa {
    private $nome;
    private $idade;

    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function getNome() {
        return $this->nome;
    }

    public function setIdade($idade) {
        $this->idade = $idade;
    }

    public function getIdade() {
        return $this->idade;
    }
}

// Uso da classe
$pessoa = new Pessoa();
$pessoa->setNome("João");
$pessoa->setIdade(25);

echo "Nome: " . $pessoa->getNome() . "<br> Idade: " . $pessoa->getIdade();

?>