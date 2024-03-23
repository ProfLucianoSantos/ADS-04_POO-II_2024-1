<?php
class Veiculo {
    protected $numPlaca;
    protected $marca;
    protected $modelo;

    public function __construct($numPlaca, $marca, $modelo) {
        $this->numPlaca = $numPlaca;
        $this->marca = $marca;
        $this->modelo = $modelo;
    }

    // Getters e Setters
    public function getNumPlaca() {
        return $this->numPlaca;
    }

    public function setNumPlaca($numPlaca) {
        $this->numPlaca = $numPlaca;
    }

    public function getMarca() {
        return $this->marca;
    }

    public function setMarca($marca) {
        $this->marca = $marca;
    }

    public function getModelo() {
        return $this->modelo;
    }

    public function setModelo($modelo) {
        $this->modelo = $modelo;
    }
}
?>
