<?php

class Servico {
    protected $codServico;
    protected $descricao;
    protected $valor;

    public function __construct($codServico, $descricao, $valor) {
        $this->codServico = $codServico;
        $this->descricao = $descricao;
        $this->valor = $valor;
    }

    // Getters e Setters
    public function getCodServico() {
        return $this->codServico;
    }

    public function setCodServico($codServico) {
        $this->codServico = $codServico;
    }

    public function getDescricao() {
        return $this->descricao;
    }

    public function setDescricao($descricao) {
        $this->descricao = $descricao;
    }

    public function getValor() {
        return $this->valor;
    }

    public function setValor($valor) {
        $this->valor = $valor;
    }
}
?>
