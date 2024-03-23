<?php
include_once 'Pessoa.php';

class Cliente extends Pessoa {
    protected $tipoCliente;
    protected $veiculos = array();

    public function __construct($codigo, $nome, $cpf, $rg, $telefone, $tipoCliente) {
        parent::__construct($codigo, $nome, $cpf, $rg, $telefone);
        $this->tipoCliente = $tipoCliente;
    }

    // Getters e Setters
    public function getTipoCliente() {
        return $this->tipoCliente;
    }

    public function setTipoCliente($tipoCliente) {
        $this->tipoCliente = $tipoCliente;
    }

    public function adicionarVeiculo(Veiculo $veiculo) {
        $this->veiculos[] = $veiculo;
    }

    public function getVeiculos() {
        return $this->veiculos;
    }
}
?>
