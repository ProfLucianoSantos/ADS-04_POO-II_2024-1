<?php
class Carro {
    // Propriedades (atributos)
    public $modelo;
    public $cor;
    
    // Método construtor
    public function __construct($modelo, $cor) {
        $this->modelo = $modelo;
        $this->cor = $cor;
    }
    
    // Método
    public function dirigir() {
        echo "O carro está se movendo.";
    }
}

// Criando um objeto da classe Carro
$carro1 = new Carro("Fusca", "Azul");

// Acessando atributos e chamando método
echo "Modelo: " . $carro1->modelo . "<br>";
echo "Cor: " . $carro1->cor . "<br>";
$carro1->dirigir();

?>