<?php
include_once 'Cliente.php';
include_once 'Servico.php';

class OrdemServico {
    protected $numOs;
    protected $dataEntrada;
    protected $dataSaida;
    protected $cliente;
    protected $servicos = array();

    public function __construct($numOs, $dataEntrada, $dataSaida) {
        $this->numOs = $numOs;
        $this->dataEntrada = $dataEntrada;
        $this->dataSaida = $dataSaida;
    }

    // Getters e Setters
    public function getNumOs() {
        return $this->numOs;
    }

    public function setNumOs($numOs) {
        $this->numOs = $numOs;
    }

    public function getDataEntrada() {
        return $this->dataEntrada;
    }

    public function setDataEntrada($dataEntrada) {
        $this->dataEntrada = $dataEntrada;
    }

    public function getDataSaida() {
        return $this->dataSaida;
    }

    public function setDataSaida($dataSaida) {
        $this->dataSaida = $dataSaida;
    }

    public function associarCliente(Cliente $cliente) {
        $this->cliente = $cliente;
    }

    public function adicionarServico(Servico $servico) {
        $this->servicos[] = $servico;
    }
}
?>
